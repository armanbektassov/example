<?php

namespace Amarkets\Events\Handler\Pipeline;

use App\src\Handler\Exceptions\ValidationErrorException;
use Illuminate\Support\Facades\Validator;

class ValidateData
{
    /**
     * Validate the data.
     *
     * @param array $data
     * @param \Closure $next
     *
     * @return mixed|null
     * @throws \App\src\Handler\Exceptions\ValidationErrorException
     */
    public function handle(array $data, \Closure $next)
    {
        $validator = Validator::make($data, $this->rules());

        if ($validator->fails()) {
            throw new ValidationErrorException('Validation error');
        }

        return $next($data);
    }

    private function rules(): array
    {
        return [
            'uuid' => 'required|uuid',
            'type' => 'required|string',
            'sent_at' => 'required|string|date',
            'version' => 'required|numeric',
            'publisher' => 'required|string',
            'data' => 'required|array',
            'data.subject.uuid' => 'required|uuid',
            'data.subject.type' => 'required|string',
            'data.object.uuid' => 'required|uuid',
            'data.object.type' => 'required|string',
            'data.action' => 'required|string',
            'data.details' => 'nullable|array',
        ];
    }
}
