<?php
namespace Brightcove\Object;

class Folder extends ObjectBase
{
    /**
     * @var string
     */
    protected $account;

    /**
     * @var string
     */
    protected $created_at;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $updated_at;

    /**
     * @var array
     */
    protected $video_count;

    /**
     * @param array $json
     */
    public function applyJSON(array $json)
    {
        parent::applyJSON($json);
        $this->applyProperty($json, 'id');
        $this->applyProperty($json, 'account');
        $this->applyProperty($json, 'created_at');
        $this->applyProperty($json, 'name');
        $this->applyProperty($json, 'updated_at');
        $this->applyProperty($json, 'video_count');
    }

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @return array
     */
    public function getVideoCount()
    {
        return $this->video_count;
    }

    /**
     * @param  string   $account
     * @return Folder
     */
    public function setAccount($account)
    {
        $this->account = $account;
        $this->fieldChanged('account');
        return $this;
    }

    /**
     * @param  string   $created_at
     * @return Folder
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        $this->fieldChanged('created_at');
        return $this;
    }

    /**
     * @param  string   $id
     * @return Folder
     */
    public function setId($id)
    {
        $this->id = $id;
        $this->fieldChanged('id');
        return $this;
    }

    /**
     * @param  string   $name
     * @return Folder
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->fieldChanged('name');
        return $this;
    }

    /**
     * @param  string   $updated_at
     * @return Folder
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        $this->fieldChanged('updated_at');
        return $this;
    }

    /**
     * @param  array    $video_count
     * @return Folder
     */
    public function setVideoCount(array $video_count)
    {
        $this->video_count = $video_count;
        $this->fieldChanged('video_count');
        return $this;
    }
}
