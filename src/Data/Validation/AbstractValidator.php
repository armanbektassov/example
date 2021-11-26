<?php


namespace Amarkets\Events\Data\Validation;


use Amarkets\Events\Data\Exceptions\ValidationException;
use Illuminate\Support\Facades\Validator;

abstract class AbstractValidator
{
    /**
     * @throws \Amarkets\Events\Data\Exceptions\ValidationException
     */
    protected function validator(array $request, array $rules): void
    {
        $validator = Validator::make($request, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator->errors()->first(), 422);
        }
    }
}
