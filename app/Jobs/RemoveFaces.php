<?php

namespace App\Jobs;

use App\Models\Image;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Enums\AlignPosition;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

use Google\Cloud\Vision\V1\Client\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\Feature;
use Google\Cloud\Vision\V1\Feature\Type;
use Google\Cloud\Vision\V1\Image as VisionImage;
use Google\Cloud\Vision\V1\AnnotateImageRequest;
use Google\Cloud\Vision\V1\BatchAnnotateImagesRequest;

class RemoveFaces implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $article_image_id;

    public function __construct($article_image_id)
    {
        $this->article_image_id = $article_image_id;
    }

    public function handle(): void
    {
        $i = Image::find($this->article_image_id);
        if (!$i) {
            return;
        }

        $srcPath = storage_path('app/public/' . $i->path);
        $imageContent = file_get_contents($srcPath);

        // Imposta il path delle credenziali Google correttamente
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . env('GOOGLE_APPLICATION_CREDENTIALS'));

        $imageAnnotator = new ImageAnnotatorClient();

        $visionImage = (new VisionImage())->setContent($imageContent);
        $feature = (new Feature())->setType(Type::FACE_DETECTION);

        $request = (new AnnotateImageRequest())
            ->setImage($visionImage)
            ->setFeatures([$feature]);

        
        $batchRequest = new BatchAnnotateImagesRequest();
        $batchRequest->setRequests([$request]);

        
        $response = $imageAnnotator->batchAnnotateImages($batchRequest);
        $faces = $response->getResponses()[0]->getFaceAnnotations();

        $imageAnnotator->close();

        if (empty($faces)) {
            return;
        }

        $image = SpatieImage::load($srcPath);

        foreach ($faces as $face) {
            $vertices = $face->getBoundingPoly()->getVertices();
            $bounds = [];

            foreach ($vertices as $vertex) {
                $bounds[] = [$vertex->getX(), $vertex->getY()];
            }

            if (count($bounds) < 4) {
                continue;
            }

            $w = $bounds[2][0] - $bounds[0][0];
            $h = $bounds[2][1] - $bounds[0][1];

            $image->watermark(
                base_path('resources/img/smile.png'),
                AlignPosition::TopLeft,
                paddingX: $bounds[0][0],
                paddingY: $bounds[0][1],
                width: $w,
                height: $h,
                fit: Fit::Stretch
            );
        }

        $image->save($srcPath);
    }
}




