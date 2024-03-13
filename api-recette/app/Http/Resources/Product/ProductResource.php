<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->getKey(),
            'category' => [
                'id' => $this->category->id,
                'name' => $this->category->name,
            ],
            'title' => $this->getName(),
            'description' => (string) $this->description,
            'number_of_people' => $this->numberOfPeople(),
            'cooking_time' => $this->convertirNumberToTime($this->cooking_time),
            'preparation_time' => $this->convertirNumberToTime($this->preparation_time),
            'dificulty' => $this->difficulty(),
        ];
    }

    public function difficulty(): string
    {
        if ($this->dificulty === 1) {
            return 'Tres facile';
        }
        if ($this->dificulty === 2) {
            return 'Facile';
        }
        if ($this->dificulty === 3) {
            return 'Moyen';
        }
        if ($this->dificulty === 4) {
            return 'Difficile';
        }
        if ($this->dificulty === 5) {
            return 'Tres difficile';
        }

        return '';
    }

    public function numberOfPeople(): string
    {
        $html = $this->number_of_people > 1 ? 'personnes' : 'personne';
        return "$this->number_of_people $html";
    }

    public function convertirNumberToTime($number): string
    {
        $heures = floor($number / 60);
        $minutes = $number % 60;
        $html = '';
        if ($heures > 0) {
            $html .= "$heures h ";
        }
        if ($minutes > 0) {
            $html .= "$minutes min";
        }
        return $html;
    }

    public function getName()
    {
        return ucfirst($this->name);
    }
}
