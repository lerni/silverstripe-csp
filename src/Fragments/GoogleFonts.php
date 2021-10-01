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
                'fonts.gstatic.com'
            ])
            ->addDirective(Directive::STYLE, [
                'fonts.googleapis.com'
            ])
            ->addDirective(Directive::FONT, [
                'fonts.gstatic.com',
                'fonts.googleapis.com'
            ])
            ->addDirective(Directive::CONNECT, [
                'fonts.googleapis.com',
                'fonts.gstatic.com'
            ]);
    }
}
