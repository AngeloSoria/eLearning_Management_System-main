<?php

function session_start_safely() {
    if (!(session_status() === PHP_SESSION_ACTIVE)) {
        // Session is not started
        // echo "Session is not started.";
        session_start(); // Start the session if needed
    }
}

