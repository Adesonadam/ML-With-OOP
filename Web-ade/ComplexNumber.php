<?php

class Number {
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }

    public function __toString() {
        return (string) $this->value;
    }
}

class ComplexNumber extends Number {
    private $real;
    private $imaginary;

    public function __construct($real, $imaginary) {
        $this->real = $real;
        $this->imaginary = $imaginary;
    }

    public function getReal() {
        return $this->real;
    }

    public function getImaginary() {
        return $this->imaginary;
    }

    public function add(ComplexNumber $number) {
        return new ComplexNumber(
            $this->real + $number->getReal(),
            $this->imaginary + $number->getImaginary()
        );
    }

    public function subtract(ComplexNumber $number) {
        return new ComplexNumber(
            $this->real - $number->getReal(),
            $this->imaginary - $number->getImaginary()
        );
    }

    public function multiply(ComplexNumber $number) {
        $real = ($this->real * $number->getReal()) - ($this->imaginary * $number->getImaginary());
        $imaginary = ($this->real * $number->getImaginary()) + ($this->imaginary * $number->getReal());
        return new ComplexNumber($real, $imaginary);
    }

    public function __toString() {
        return $this->real . ($this->imaginary >= 0 ? '+' : '') . $this->imaginary . 'i';
    }
}

?>

