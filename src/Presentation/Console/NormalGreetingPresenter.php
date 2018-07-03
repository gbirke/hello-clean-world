<?php

class DefaultGreetingPresenter implements GreetingPresenterInterface {
    public function present( string $salutation, string $location ): void {
        printf( "%s %s!\n", $salutation, $location);
    }
}
