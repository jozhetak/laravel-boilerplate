<?php

namespace App\Models\Traits;

/**
 * Class User
 * @package App\Models\Access\User
 */
trait HtmlElements
{
    /**
     * @param $templateName
     * @param $src
     * @param $alt
     * @param $width
     * @param $height
     * @return string
     */
    public function getImageThumbnailHtml($templateName, $src, $alt, $width, $height)
    {
        $src = url(config('imagecache.route') . '/' . $templateName . '/' . $src);

        return "<img src='$src' alt='$alt' width='$width' height='$height'>";
    }

    /**
     * @param $boolean boolean
     * @return string
     */
    public function getBooleanLabelHtml($boolean)
    {
        if ($boolean) {
            return "<label class='label label-success'>" . trans('labels.backend.yes') . "</label>";
        }
        return "<label class='label label-danger'>" . trans('labels.backend.no') . "</label>";
    }

    /**
     * @param $route
     * @return string
     */
    public function getShowButtonHtml($route)
    {
        return '<a href="' . route($route, $this) . '" class="btn btn-xs btn-success"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.backend.show') . '"></i></a> ';
    }

    /**
     * @param $route
     * @return string
     */
    public function getEditButtonHtml($route)
    {
        return '<a href="' . route($route, $this) . '" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.backend.edit') . '"></i></a> ';
    }

    /**
     * @param $route
     * @return string
     */
    public function getDeleteButtonHtml($route)
    {
        return '<a href="' . route($route, $this) . '"
            data-method="delete"
            data-trans-button-cancel="' . trans('buttons.backend.cancel') . '"
            data-trans-button-confirm="' . trans('buttons.backend.delete') . '"
            data-trans-title="' . trans('labels.backend.are_you_sure') . '"
            class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.backend.delete') . '"></i></a> ';
    }
}