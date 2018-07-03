<?php

class ExcitedGreetingPresenter implements GreetingPresenterInterface {
    public function present( string $salutation, string $location ): void {
        printf(
            "%s %s!!!111oneeleven\n",
            mb_strtoupper( $salutation ),
            mb_strtoupper( $location )
        );
    }
}
