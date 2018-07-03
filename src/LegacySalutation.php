<?php

class LegacySaluation implements SaluationInterface {
    public function createSalutation(): string {
        return 'Good day to you,';
    }
}
