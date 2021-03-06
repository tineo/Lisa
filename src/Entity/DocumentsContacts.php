<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentsContacts
 *
 * @ORM\Table(name="documents_contacts", indexes={@ORM\Index(name="documents_contacts_contact_id", columns={"contact_id", "document_id"}), @ORM\Index(name="documents_contacts_document_id", columns={"document_id", "contact_id"})})
 * @ORM\Entity
 */
class DocumentsContacts
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="document_id", type="string", length=36, nullable=true)
     */
    private $documentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_id", type="string", length=36, nullable=true)
     */
    private $contactId;


}
