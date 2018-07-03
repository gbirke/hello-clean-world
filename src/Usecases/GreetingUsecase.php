<?php

class GreetingUsecase {
    private $salutation;
    private $location;
    private $presenter;

    public function __construct( SalutationInterface $salutation, Location $location, GreetingPresenterInterface $presenter)
    {
        $this->salutation = $salutation;
        $this->location = $location;
        $this->presenter = $presenter;
    }

    public function greetLocation()
    {
        $this->presenter->present(
            $this->salutation->createSalutation(),
            $this->location->retrieveLocation()
        );
    }
}
