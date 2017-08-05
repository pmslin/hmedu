<?php

namespace Biz\Util\Service\Impl;

use Biz\BaseService;
use Biz\Util\Service\MediaParseService;
use AppBundle\Component\MediaParser\ParserProxy;

class MediaParseServiceImpl extends BaseService implements MediaParseService
{
    public function parseMediaItem($url, $refresh = false)
    {
        return $this->_parseMedia('item', $url, $refresh);
    }

    public function parseMediaAlbum($url, $refresh = false)
    {
        return $this->_parseMedia('album', $url, $refresh);
    }

    public function getMediaByUuid($uuid, $refresh = false)
    {
        $mediaParse = $this->getMediaParseDao()->getMediaParseByUuid($uuid);
        if (empty($mediaParse)) {
            return null;
        } else {
            return json_decode($mediaParse['media'], true);
        }
    }

    protected function _parseMedia($type, $url, $refresh)
    {
        $urlHash = md5($type.'|'.$url);

        $mediaParseExisting = $this->getMediaParseDao()->getMediaParseByHash($urlHash);
        if ($mediaParseExisting && !$refresh) {
            return json_decode($mediaParseExisting['media'], true);
        }

        $proxy = new ParserProxy();
        if ($type == 'album') {
            $media = $proxy->parseAlbum($url);
        } else {
            $media = $proxy->parseItem($url);
        }

        if ($mediaParseExisting) {
            $mediaParse = array(
                'uuid' => $media['uuid'],
                'media' => json_encode($media),
                'updatedTime' => time(),
            );
            $this->getMediaParseDao()->update($mediaParseExisting['id'], $mediaParse);
        } else {
            $mediaParseExisting = $this->getMediaParseDao()->getMediaParseByUuid($media['uuid']);
            if ($mediaParseExisting) {
                $mediaParse = array(
                    'hash' => md5($media['url']),
                    'media' => json_encode($media),
                    'updatedTime' => time(),
                );
                $this->getMediaParseDao()->update($mediaParseExisting['id'], $mediaParse);
            } else {
                $mediaParse = array(
                    'uuid' => $media['uuid'],
                    'hash' => $urlHash,
                    'media' => json_encode($media),
                    'createdTime' => time(),
                    'updatedTime' => time(),
                );
                $this->getMediaParseDao()->create($mediaParse);
            }
        }

        return $media;
    }

    protected function getMediaParseDao()
    {
        return $this->createDao('Util:MediaParseDao');
    }
}
