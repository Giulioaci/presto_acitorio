<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\Feature;
use Google\Cloud\Vision\V1\Image as VisionImage;
use Google\Cloud\Vision\V1\AnnotateImageRequest;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $article_image_id;

    public function __construct($article_image_id)
    {
        $this->article_image_id = $article_image_id;
    }

    public function handle(): void
    {
        $imageModel = Image::find($this->article_image_id);
        if (!$imageModel) {
            return;
        }

        $imagePath = storage_path('app/public/' . $imageModel->path);
        if (!file_exists($imagePath)) {
            return;
        }

        $imageContent = file_get_contents($imagePath);

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . env('GOOGLE_APPLICATION_CREDENTIALS'));

        $client = new ImageAnnotatorClient();

       
        $visionImage = (new VisionImage())->setContent($imageContent);

        $feature = (new Feature())->setType(Feature\Type::SAFE_SEARCH_DETECTION);

        $request = (new AnnotateImageRequest())
            ->setImage($visionImage)
            ->setFeatures([$feature]);

        $response = $client->batchAnnotateImages([$request]);
        $client->close();

        $safe = $response->getResponses()[0]->getSafeSearchAnnotation();

        if (!$safe) {
            return;
        }

        $adult = $safe->getAdult();
        $medical = $safe->getMedical();
        $spoof = $safe->getSpoof();
        $violence = $safe->getViolence();
        $racy = $safe->getRacy();

        $likelihoodName = [
            'text-secondary bi bi-circle-fill',        
            'text-success bi bi-check-circle-fill',    
            'text-success bi bi-check-circle-fill',    
            'text-warning bi bi-exclamation-circle-fill', 
            'text-warning bi bi-exclamation-circle-fill', 
            'text-danger bi bi-dash-circle-fill',      
        ];

        $imageModel->adult = $likelihoodName[$adult] ?? null;
        $imageModel->spoof = $likelihoodName[$spoof] ?? null;
        $imageModel->racy = $likelihoodName[$racy] ?? null;
        $imageModel->medical = $likelihoodName[$medical] ?? null;
        $imageModel->violence = $likelihoodName[$violence] ?? null;

        $imageModel->save();
    }
}
