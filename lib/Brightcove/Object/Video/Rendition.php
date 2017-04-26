<?php
namespace Brightcove\Object\Video;

use Brightcove\Object\ObjectBase;

class Rendition extends ObjectBase
{
    /**
     * @var mixed
     */
    protected $account;

    /**
     * @var mixed
     */
    protected $audio_only;

    /**
     * @var mixed
     */
    protected $cdn_origin_id;

    /**
     * @var mixed
     */
    protected $complete;

    /**
     * @var mixed
     */
    protected $controller_type;

    /**
     * @var mixed
     */
    protected $current_filename;

    /**
     * @var mixed
     */
    protected $drm;

    /**
     * @var mixed
     */
    protected $encoding_rate;

    /**
     * @var mixed
     */
    protected $frame_height;

    /**
     * @var mixed
     */
    protected $frame_width;

    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var mixed
     */
    protected $key_systems;

    /**
     * @var mixed
     */
    protected $name;

    /**
     * @var mixed
     */
    protected $progressive_download;

    /**
     * @var mixed
     */
    protected $reference_id;

    /**
     * @var mixed
     */
    protected $remote_stream_name;

    /**
     * @var mixed
     */
    protected $remote_url;

    /**
     * @var mixed
     */
    protected $size;

    /**
     * @var mixed
     */
    protected $type;

    /**
     * @var mixed
     */
    protected $updated_at;

    /**
     * @var mixed
     */
    protected $uploaded_at;

    /**
     * @var mixed
     */
    protected $video_codec;

    /**
     * @var mixed
     */
    protected $video_container;

    /**
     * @var mixed
     */
    protected $video_duration;

    /**
     * @param array $json
     */
    public function applyJSON(array $json)
    {
        parent::applyJSON($json);
        $this->applyProperty($json, 'account');
        $this->applyProperty($json, 'id');
        $this->applyProperty($json, 'audio_only');
        $this->applyProperty($json, 'cdn_origin_id');
        $this->applyProperty($json, 'complete');
        $this->applyProperty($json, 'controller_type');
        $this->applyProperty($json, 'current_filename');
        $this->applyProperty($json, 'drm');
        $this->applyProperty($json, 'encoding_rate');
        $this->applyProperty($json, 'frame_height');
        $this->applyProperty($json, 'frame_width');
        $this->applyProperty($json, 'key_systems');
        $this->applyProperty($json, 'name');
        $this->applyProperty($json, 'progressive_download');
        $this->applyProperty($json, 'reference_id');
        $this->applyProperty($json, 'remote_url');
        $this->applyProperty($json, 'remote_stream_name');
        $this->applyProperty($json, 'size');
        $this->applyProperty($json, 'type');
        $this->applyProperty($json, 'updated_at');
        $this->applyProperty($json, 'uploaded_at');
        $this->applyProperty($json, 'video_codec');
        $this->applyProperty($json, 'video_container');
        $this->applyProperty($json, 'video_duration');
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return mixed
     */
    public function getAudioOnly()
    {
        return $this->audio_only;
    }

    /**
     * @return mixed
     */
    public function getCdnOriginId()
    {
        return $this->cdn_origin_id;
    }

    /**
     * @return mixed
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * @return mixed
     */
    public function getControllerType()
    {
        return $this->controller_type;
    }

    /**
     * @return mixed
     */
    public function getCurrentFilename()
    {
        return $this->current_filename;
    }

    /**
     * @return mixed
     */
    public function getDrm()
    {
        return $this->drm;
    }

    /**
     * @return mixed
     */
    public function getEncodingRate()
    {
        return $this->encoding_rate;
    }

    /**
     * @return mixed
     */
    public function getFrameHeight()
    {
        return $this->frame_height;
    }

    /**
     * @return mixed
     */
    public function getFrameWidth()
    {
        return $this->frame_width;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getKeySystems()
    {
        return $this->key_systems;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getProgressiveDownload()
    {
        return $this->progressive_download;
    }

    /**
     * @return mixed
     */
    public function getReferenceId()
    {
        return $this->reference_id;
    }

    /**
     * @return mixed
     */
    public function getRemoteStreamName()
    {
        return $this->remote_stream_name;
    }

    /**
     * @return mixed
     */
    public function getRemoteUrl()
    {
        return $this->remote_url;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @return mixed
     */
    public function getUploadedAt()
    {
        return $this->uploaded_at;
    }

    /**
     * @return mixed
     */
    public function getVideoCodec()
    {
        return $this->video_codec;
    }

    /**
     * @return mixed
     */
    public function getVideoContainer()
    {
        return $this->video_container;
    }

    /**
     * @return mixed
     */
    public function getVideoDuration()
    {
        return $this->video_duration;
    }

    /**
     * @param  $account
     * @return mixed
     */
    public function setAccount($account)
    {
        $this->account = $account;
        $this->fieldChanged('account');
        return $this;
    }

    /**
     * @param  $audio_only
     * @return mixed
     */
    public function setAudioOnly($audio_only)
    {
        $this->audio_only = $audio_only;
        $this->fieldChanged('audio_only');
        return $this;
    }

    /**
     * @param  $cdn_origin_id
     * @return mixed
     */
    public function setCdnOriginId($cdn_origin_id)
    {
        $this->cdn_origin_id = $cdn_origin_id;
        $this->fieldChanged('cdn_origin_id');
        return $this;
    }

    /**
     * @param  $complete
     * @return mixed
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;
        $this->fieldChanged('complete');
        return $this;
    }

    /**
     * @param  $controller_type
     * @return mixed
     */
    public function setControllerType($controller_type)
    {
        $this->controller_type = $controller_type;
        $this->fieldChanged('controller_type');
        return $this;
    }

    /**
     * @param  $current_filename
     * @return mixed
     */
    public function setCurrentFilename($current_filename)
    {
        $this->current_filename = $current_filename;
        $this->fieldChanged('current_filename');
        return $this;
    }

    /**
     * @param  $drm
     * @return mixed
     */
    public function setDrm($drm)
    {
        $this->drm = $drm;
        $this->fieldChanged('drm');
        return $this;
    }

    /**
     * @param  $encoding_rate
     * @return mixed
     */
    public function setEncodingRate($encoding_rate)
    {
        $this->encoding_rate = $encoding_rate;
        $this->fieldChanged('encoding_rate');
        return $this;
    }

    /**
     * @param  $frame_height
     * @return mixed
     */
    public function setFrameHeight($frame_height)
    {
        $this->frame_height = $frame_height;
        $this->fieldChanged('frame_height');
        return $this;
    }

    /**
     * @param  $frame_width
     * @return mixed
     */
    public function setFrameWidth($frame_width)
    {
        $this->frame_width = $frame_width;
        $this->fieldChanged('frame_width');
        return $this;
    }

    /**
     * @param  $id
     * @return mixed
     */
    public function setId($id)
    {
        $this->id = $id;
        $this->fieldChanged('id');
        return $this;
    }

    /**
     * @param  $key_systems
     * @return mixed
     */
    public function setKeySystems($key_systems)
    {
        $this->key_systems = $key_systems;
        $this->fieldChanged('key_systems');
        return $this;
    }

    /**
     * @param  $name
     * @return mixed
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->fieldChanged('name');
        return $this;
    }

    /**
     * @param  $progressive_download
     * @return mixed
     */
    public function setProgressiveDownload($progressive_download)
    {
        $this->progressive_download = $progressive_download;
        $this->fieldChanged('progressive_download');
        return $this;
    }

    /**
     * @param  $reference_id
     * @return mixed
     */
    public function setReferenceId($reference_id)
    {
        $this->reference_id = $reference_id;
        $this->fieldChanged('reference_id');
        return $this;
    }

    /**
     * @param  $remote_stream_name
     * @return mixed
     */
    public function setRemoteStreamName($remote_stream_name)
    {
        $this->remote_stream_name = $remote_stream_name;
        $this->fieldChanged('remote_stream_name');
        return $this;
    }

    /**
     * @param  $remote_url
     * @return mixed
     */
    public function setRemoteUrl($remote_url)
    {
        $this->remote_url = $remote_url;
        $this->fieldChanged('remote_url');
        return $this;
    }

    /**
     * @param  $size
     * @return mixed
     */
    public function setSize($size)
    {
        $this->size = $size;
        $this->fieldChanged('size');
        return $this;
    }

    /**
     * @param  $type
     * @return mixed
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->fieldChanged('type');
        return $this;
    }

    /**
     * @param  $updated_at
     * @return mixed
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        $this->fieldChanged('updated_at');
        return $this;
    }

    /**
     * @param  $uploaded_at
     * @return mixed
     */
    public function setUploadedAt($uploaded_at)
    {
        $this->uploaded_at = $uploaded_at;
        $this->fieldChanged('uploaded_at');
        return $this;
    }

    /**
     * @param  $video_codec
     * @return mixed
     */
    public function setVideoCodec($video_codec)
    {
        $this->video_codec = $video_codec;
        $this->fieldChanged('video_codec');
        return $this;
    }

    /**
     * @param  $video_container
     * @return mixed
     */
    public function setVideoContainer($video_container)
    {
        $this->video_container = $video_container;
        $this->fieldChanged('video_container');
        return $this;
    }

    /**
     * @param  $video_duration
     * @return mixed
     */
    public function setVideoDuration($video_duration)
    {
        $this->video_duration = $video_duration;
        $this->fieldChanged('video_duration');
        return $this;
    }
}
