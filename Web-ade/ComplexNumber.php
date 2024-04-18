<?php

// ComplexNumber.php

class ComplexNumber {
    private $real;
    private $imaginary;

    public function __construct($real, $imaginary) {
        $this->real = $real;
        $this->imaginary = $imaginary;
    }

    public function add(ComplexNumber $number) {
        return new ComplexNumber(
            $this->real + $number->real,
            $this->imaginary + $number->imaginary
        );
    }

    public function subtract(ComplexNumber $number) {
        return new ComplexNumber(
            $this->real - $number->real,
            $this->imaginary - $number->imaginary
        );
    }

    public function multiply(ComplexNumber $number) {
        $real = ($this->real * $number->real) - ($this->imaginary * $number->imaginary);
        $imaginary = ($this->real * $number->imaginary) + ($this->imaginary * $number->real);
        return new ComplexNumber($real, $imaginary);
    }

    public function __toString() {
        return $this->real . ($this->imaginary >= 0 ? '+' : '') . $this->imaginary . 'i';
    }
}

?>

