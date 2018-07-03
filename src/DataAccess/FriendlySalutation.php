<?php

class FriendlySalutation implements SalutationInterface {
    public function createSalutation(): string {
        return 'Hello';
    }
}
