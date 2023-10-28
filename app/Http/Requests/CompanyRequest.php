<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'cover' => 'image|mimes:jpeg,png,jpg|max:2048',
            'company_name' => ['required', 'string', 'min:2'],
            'company_email' => ['required', 'string', 'email', 'min:2'],
            'company_about' => ['required', 'string', 'min:2'],
            'company_phone' => ['required', 'numeric', 'min:2'],
            'company_founded' => 'date',
            'company_categories' => ['required', 'string', 'min:1'],
            'company_size' => ['required', 'numeric', 'min:2'],
            'company_address' => ['required', 'string', 'min:2'],
            'company_website' => ['string', 'min:2'],
            'company_facebook' => ['string', 'min:2'],
            'company_linkedin' => ['string', 'min:2'],
            'company_twitter' => ['string', 'min:2'],
            'company_instagram' => ['string', 'min:2'],
        ];
    }

    public function messages() {
        return [
            'logo.required' => 'The company logo field is required.',
            'cover' => 'The company background field is required.',
            'company_name' => 'The company name field is required.',
            'company_email' => 'The company email address field is required.',
            'company_about' => 'The company about field is required.',
            'company_phone' => 'The company phone number field is required.',
            'company_founded' => 'The company found date field is required.',
            'company_categories' => 'The company category field is required.',
            'company_size' => 'The company size field is required.',
            'company_address' => 'The company address field is required.',
            'company_website' => 'The company website field is required.',
            'company_facebook' => 'The company facebook field is required.',
            'company_linkedin' => 'The company linkedin field is required.',
            'company_twitter' => 'The company twitter field is required.',
            'company_instagram' => 'The company instagram field is required.',      
        ];
    }
}
