<?php
namespace Brightcove\API;

use Brightcove\API\Request\SubscriptionRequest;
use Brightcove\Object\CustomFields;
use Brightcove\Object\Folder;
use Brightcove\Object\Playlist;
use Brightcove\Object\Subscription;
use Brightcove\Object\Video\Images;
use Brightcove\Object\Video\Source;
use Brightcove\Object\Video\Video;

class CMS extends API
{
    /**
     * @param  $folder_id
     * @param  $video_id
     * @return mixed
     */
    public function addVideoToFolder($folder_id, $video_id)
    {
        return $this->cmsRequest('PUT', "/folders/{$folder_id}/videos/{$video_id}", null);
    }

    /**
     * @return mixed
     */
    public function countPlaylists()
    {
        $result = $this->cmsRequest('GET', '/counts/playlists', null);
        if ($result && !empty($result['count'])) {
            return $result['count'];
        }
        return null;
    }

    /**
     * @param $search
     */
    public function countVideos($search = null)
    {
        $query  = $search === null ? '' : '?q=' . urlencode($search);
        $result = $this->cmsRequest('GET', "/counts/videos{$query}", null);
        if ($result && !empty($result['count'])) {
            return $result['count'];
        }
        return null;
    }

    /**
     * @param  Folder  $folder
     * @return mixed
     */
    public function createFolder(Folder $folder)
    {
        return $this->cmsRequest('POST', '/folders', Folder::class, false, $folder);
    }

    /**
     * @param  Playlist $playlist
     * @return mixed
     */
    public function createPlaylist(Playlist $playlist)
    {
        return $this->cmsRequest('POST', '/playlists', Playlist::class, false, $playlist);
    }

    /**
     * @param  SubscriptionRequest $request
     * @return mixed
     */
    public function createSubscription(SubscriptionRequest $request)
    {
        return $this->cmsRequest('POST', '/subscriptions', Subscription::class, false, $request);
    }

    /**
     * @param  Video   $video
     * @return mixed
     */
    public function createVideo(Video $video)
    {
        return $this->cmsRequest('POST', '/videos', Video::class, false, $video);
    }

    /**
     * @param $folder_id
     */
    public function deleteFolder($folder_id)
    {
        $this->cmsRequest('DELETE', "/folders/{$folder_id}", null);
    }

    /**
     * @param $subscription_id
     */
    public function deleteSubscription($subscription_id)
    {
        $this->cmsRequest('DELETE', "/subscriptions/{$subscription_id}", null);
    }

    /**
     * @param  $video_id
     * @return mixed
     */
    public function deleteVideo($video_id)
    {
        return $this->cmsRequest('DELETE', "/videos/{$video_id}", null);
    }

    /**
     * @param  $folder_id
     * @return mixed
     */
    public function getFolder($folder_id)
    {
        return $this->cmsRequest('GET', "/folders/{$folder_id}", Folder::class);
    }

    /**
     * @return mixed
     */
    public function getFolders()
    {
        return $this->cmsRequest('GET', '/folders', Folder::class, true);
    }

    /**
     * @param  $playlist_id
     * @return mixed
     */
    public function getPlaylist($playlist_id)
    {
        return $this->cmsRequest('GET', "/playlists/{$playlist_id}", Playlist::class);
    }

    /**
     * @param  $subscription_id
     * @return mixed
     */
    public function getSubscription($subscription_id)
    {
        return $this->cmsRequest('GET', "/subscriptions/{$subscription_id}", Subscription::class);
    }

    /**
     * @return mixed
     */
    public function getSubscriptions()
    {
        return $this->cmsRequest('GET', '/subscriptions', Subscription::class, true);
    }

    /**
     * @param  $video_id
     * @return mixed
     */
    public function getVideo($video_id)
    {
        return $this->cmsRequest('GET', "/videos/{$video_id}", Video::class);
    }

    /**
     * @param $playlist_id
     */
    public function getVideoCountInPlaylist($playlist_id)
    {
        $result = $this->cmsRequest('GET', "/counts/playlists/{$playlist_id}/videos", null);
        if ($result && !empty($result['count'])) {
            return $result['count'];
        }
        return null;
    }

    /**
     * @return mixed
     */
    public function getVideoFields()
    {
        return $this->cmsRequest('GET', '/video_fields', CustomFields::class, false);
    }

    /**
     * @param  $video_id
     * @return mixed
     */
    public function getVideoImages($video_id)
    {
        return $this->cmsRequest('GET', "/videos/{$video_id}/images", Images::class);
    }

    /**
     * @param  $video_id
     * @return mixed
     */
    public function getVideoRenditions($video_id)
    {
        return $this->cmsRequest('GET', "/videos/{$video_id}/assets/renditions", Rendition::class, true);
    }

    /**
     * @param  $video_id
     * @return mixed
     */
    public function getVideoSources($video_id)
    {
        return $this->cmsRequest('GET', "/videos/{$video_id}/sources", Source::class, true);
    }

    /**
     * @param  $playlist_id
     * @return mixed
     */
    public function getVideosInPlaylist($playlist_id)
    {
        return $this->cmsRequest('GET', "/playlists/{$playlist_id}/videos", Video::class, true);
    }

    /**
     * @param $sort
     * @param null    $limit
     * @param null    $offset
     */
    public function listPlaylists($sort = null, $limit = null, $offset = null)
    {
        $query = '';
        if ($sort) {
            $query .= "&sort={$sort}";
        }
        if ($limit) {
            $query .= "&limit={$limit}";
        }
        if ($offset) {
            $query .= "&offset={$offset}";
        }
        if (strlen($query) > 0) {
            $query = '?' . substr($query, 1);
        }
        return $this->cmsRequest('GET', "/playlists{$query}", Playlist::class, true);
    }

    /**
     * @param $search
     * @param null      $sort
     * @param null      $limit
     * @param null      $offset
     */
    public function listVideos($search = null, $sort = null, $limit = null, $offset = null)
    {
        $query = '';
        if ($search) {
            $query .= '&q=' . urlencode($search);
        }
        if ($sort) {
            $query .= "&sort={$sort}";
        }
        if ($limit) {
            $query .= "&limit={$limit}";
        }
        if ($offset) {
            $query .= "&offset={$offset}";
        }
        if (strlen($query) > 0) {
            $query = '?' . substr($query, 1);
        }
        return $this->cmsRequest('GET', "/videos{$query}", Video::class, true);
    }

    /**
     * @param  Folder  $folder
     * @return mixed
     */
    public function updateFolder(Folder $folder)
    {
        $folder->fieldUnchanged('id');
        return $this->cmsRequest('PATCH', "/folders/{$folder->getId()}", Folder::class, false, $folder);
    }

    /**
     * @param  Playlist $playlist
     * @return mixed
     */
    public function updatePlaylist(Playlist $playlist)
    {
        $playlist->fieldUnchanged('id');
        return $this->cmsRequest('PATCH', "/playlists/{$playlist->getId()}", Playlist::class, false, $playlist);
    }

    /**
     * @param  Video   $video
     * @return mixed
     */
    public function updateVideo(Video $video)
    {
        $video->fieldUnchanged('account_id', 'id');
        return $this->cmsRequest('PATCH', "/videos/{$video->getId()}", Video::class, false, $video);
    }

    /**
     * @param  $method
     * @param  $endpoint
     * @param  $result
     * @param  $is_array
     * @param  false       $post
     * @return mixed
     */
    protected function cmsRequest($method, $endpoint, $result, $is_array = false, $post = null)
    {
        return $this->client->request($method, 'cms', $this->account, $endpoint, $result, $is_array, $post);
    }
}
