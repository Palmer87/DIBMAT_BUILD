<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titre' => 'required|string|max:255',
            'image' => 'required|mimes:jpeg,png,jpg|max:2048',
            'categorie' => 'required|string|in:Evènement,Construction,Batiment,Climatisation,Electricité',
            'content' => 'required|string',
        ];
    }
    /**
     * Get the custom messages for the validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'titre.required' => 'Le titre est obligatoire.',
            'titre.string' => 'Le titre doit être une chaîne de caractères.',
            'titre.max' => 'Le titre ne peut pas dépasser 255 caractères.',
            'contenu.required' => 'Le contenu est obligatoire.',
            'contenu.string' => 'Le contenu doit être une chaîne de caractères.',
            'image.required' => 'L\'image est obligatoire.',
            'image.mimes' => 'L\'image doit être au format jpeg, png, jpg',
            'image.max' => 'L\'image ne peut pas dépasser 2048 Ko.',
        ];
    }
}
