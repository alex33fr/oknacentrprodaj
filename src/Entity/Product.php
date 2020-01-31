<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
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
     */
    private $productColor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productImage;

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

    public function getProductImage(): ?string
    {
        return $this->productImage;
    }

    public function setProductImage(string $productImage): self
    {
        $this->productImage = $productImage;

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
}
