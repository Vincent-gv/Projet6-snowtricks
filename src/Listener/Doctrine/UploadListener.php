<?php

namespace App\Listener\Doctrine;

use App\Entity\IUploadable;
use App\Service\FileUploader;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class UploadListener
{
    /**
     * @var FileUploader
     */
    private $fileUploader;

    public function __construct(FileUploader $fileUploader)
    {
        $this->fileUploader = $fileUploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if (!($entity instanceof IUploadable) || !$entity->getFile()) {
            return;
        }

        $this->fileUploader->upload($entity);
    }

    public function postRemove (LifecycleEventArgs $args) {
        $entity = $args->getObject();

        if (!($entity instanceof IUploadable)) {
            return;
        }

        $this->fileUploader->remove($entity);

    }
}
