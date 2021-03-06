<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Exception;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 * @Vich\Uploadable
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $productColor;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 100,
     *      minMessage = "Описание слишком короткое, используйте больше {{ limit }} символов",
     *      maxMessage = "Описание очень длинное, нужно меньше символов чем {{ limit }}"
     * )
     */
    private $productName;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $productImage;

    /**
     * @Assert\Image(mimeTypes="image/jpeg",
     *     mimeTypesMessage="Фотография должна быть только типа: .jpeg",
     *     detectCorrupted="true",
     *     corruptedMessage="Файл фотографии повреждён, попробуйте снова или же используйте другой файл")
     * @var File|null
     * @Vich\UploadableField(mapping="products_image", fileNameProperty="productImage")
     */
    private $productImageFile;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $productDescriptionOne;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $productDescriptionTwo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $productCode;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $productQuantity;

    /**
     * @ORM\Column(type="integer")
     */
    private $productSwitchPrice;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $productLowPrice;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $productPrice;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $productCoupon;

    /**
     * @ORM\Column(type="datetime")
     */
    private $productCreatedAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductColor(): ?string
    {
        return $this->productColor;
    }

    public function setProductColor(?string $productColor): self
    {
        $this->productColor = $productColor;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getProductDescriptionOne(): ?string
    {
        return $this->productDescriptionOne;
    }

    public function setProductDescriptionOne(?string $productDescriptionOne): self
    {
        $this->productDescriptionOne = $productDescriptionOne;

        return $this;
    }

    public function getProductDescriptionTwo(): ?string
    {
        return $this->productDescriptionTwo;
    }

    public function setProductDescriptionTwo(?string $productDescriptionTwo): self
    {
        $this->productDescriptionTwo = $productDescriptionTwo;

        return $this;
    }

    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;

        return $this;
    }

    public function getProductQuantity(): ?int
    {
        return $this->productQuantity;
    }

    public function setProductQuantity(?int $productQuantity): self
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    public function getProductSwitchPrice(): ?int
    {
        return $this->productSwitchPrice;
    }

    public function setProductSwitchPrice(int $productSwitchPrice): self
    {
        $this->productSwitchPrice = $productSwitchPrice;

        return $this;
    }

    public function getProductLowPrice(): ?float
    {
        return $this->productLowPrice;
    }

    public function setProductLowPrice(?float $productLowPrice): self
    {
        $this->productLowPrice = $productLowPrice;

        return $this;
    }

    public function getProductPrice(): ?float
    {
        return $this->productPrice;
    }

    public function setProductPrice(?float $productPrice): self
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    public function getProductCoupon(): ?int
    {
        return $this->productCoupon;
    }

    public function setProductCoupon(?int $productCoupon): self
    {
        $this->productCoupon = $productCoupon;

        return $this;
    }

    public function getProductCreatedAt(): ?\DateTimeInterface
    {
        return $this->productCreatedAt;
    }

    public function setProductCreatedAt(\DateTimeInterface $productCreatedAt): self
    {
        $this->productCreatedAt = $productCreatedAt;

        return $this;
    }

    /**
     * @return File|null
     */
    public function getProductImageFile(): ?File
    {
        return $this->productImageFile;
    }

    /**
     * @param File|null $productImageFile
     * @throws Exception
     */
    public function setProductImageFile(?File $productImageFile): void
    {
        $this->productImageFile = $productImageFile;
        if ($this->productImageFile instanceof UploadedFile) {
            $this->updated_at = new \DateTime('now');
        }
    }

    /**
     * @return string|null
     */
    public function getProductImage(): ?string
    {
        return $this->productImage;
    }

    /**
     * @param string|null $productImage
     */
    public function setProductImage(?string $productImage): void
    {
        $this->productImage = $productImage;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
