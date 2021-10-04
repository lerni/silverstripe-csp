<?php

namespace Silverstripe\CSP\Fragments;

use Silverstripe\CSP\Directive;
use Silverstripe\CSP\Policies\Policy;
use Silverstripe\CSP\Fragments\Fragment;

class GoogleFonts implements Fragment
{
    public static function addTo(Policy $policy): void
    {
        # https://rapidsec.com/csp-packages/google_fonts
        $policy
            ->addDirective(Directive::IMG, [
                'https://fonts.gstatic.com'
            ])
            ->addDirective(Directive::STYLE, [
                'https://fonts.googleapis.com'
            ])
            ->addDirective(Directive::FONT, [
                'https://fonts.gstatic.com',
                'https://fonts.googleapis.com'
            ])
            ->addDirective(Directive::CONNECT, [
                'https://fonts.googleapis.com',
                'https://fonts.gstatic.com'
            ]);
    }
}
