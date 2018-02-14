<?php

namespace App\AppBundle\Controller;

use App\AppBundle\Wrapper\RequestDataWrapper;
use JMS\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class PdfController
{
    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * PdfController constructor.
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @ApiDoc(
     *      statusCodes={
     *         200="Returned when successful",
     *         500="Returned when problems with server or configuration"
     *     },
     *     description="Get prepared for report list of history lines by order line id."
     * )
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function parsePdfAction(Request $request)
    {
        $data = $this->serializer->deserialize(
            $request->getContent(),
            RequestDataWrapper::class,
            'json'
        );

        var_dump($data->getValue());
        return new JsonResponse();
    }
}
