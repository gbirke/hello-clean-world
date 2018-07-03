<?php

class LegacySalutation implements SalutationInterface {
    public function createSalutation(): string {
        return 'Good day to you,';
    }
}
