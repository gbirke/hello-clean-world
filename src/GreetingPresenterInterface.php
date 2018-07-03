<?php

interface GreetingPresenterInterface {
    public function present( string $salutation, string $location ): void;
}
