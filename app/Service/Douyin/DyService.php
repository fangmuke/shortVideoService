<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Service\Douyin;

use App\Utils\WebSocketClient\Client;
use App\Utils\WebSocketClient\ClientFactory;
use Douyin\ChatMessage;
use Douyin\GiftMessage;
use Douyin\LikeMessage;
use Douyin\MemberMessage;
use Douyin\PushFrame;
use Douyin\Response;
use Douyin\SocialMessage;
use Hyperf\Redis\Redis;
use Hyperf\Utils\Codec\Json;
use Swoole\Coroutine;
use Swoole\WebSocket\Server;

class DyService
{
    /**
     * @var string
     */
    protected $ttwid;

    /**
     * @var string
     */
    protected $liveRoomId;

    /**
     * @var string
     */
    protected $liveRoomTitle;

    /**
     * @var string
     */
    protected $flag;

    /**
     * @var ClientFactory
     */
    protected $clientFactory;

    /**
     * @var Redis
     */
    protected $redis;

    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    public function __construct(ClientFactory $clientFactory, Redis $redis, \GuzzleHttp\Client $client)
    {
        $this->clientFactory = $clientFactory;
        $this->redis = $redis;
        $this->client = $client;
    }

    public function wssClientStart(string $url, int $fd, Server $server, string $flag): void
    {
        $this->flag = $flag;
        $this->parseLiveRoomUrl($url);
        $this->recv($fd, $server);
    }

    public function WebcastMemberMessage($data, int $fd, Server $server)
    {
        $memberMessage = new MemberMessage();
        $memberMessage->mergeFromString($data);
        $server->push($fd, $memberMessage->serializeToJsonString());
    }

    protected function recv(int $fd, Server $server): void
    {
        $wssUrl = 'wss://webcast3-ws-web-lf.douyin.com/webcast/im/push/v2/?app_name=douyin_web&version_code=180800&webcast_sdk_version=1.3.0&update_version_code=1.3.0&compress=gzip&internal_ext=internal_src:dim|wss_push_room_id:' . $this->liveRoomId . '|wss_push_did:7139391558914393612|dim_log_id:2022113016104801020810207318AA8748|fetch_time:1669795848095|seq:1|wss_info:0-1669795848095-0-0|wrds_kvs:WebcastRoomStatsMessage-1669795848048115671_WebcastRoomRankMessage-1669795848064411370&cursor=t-1669795848095_r-1_d-1_u-1_h-1&host=https://live.douyin.com&aid=6383&live_id=1&did_rule=3&debug=false&endpoint=live_pc&support_wrds=1&im_path=/webcast/im/fetch/&device_platform=web&cookie_enabled=true&screen_width=1440&screen_height=900&browser_language=zh&browser_platform=MacIntel&browser_name=Mozilla&browser_version=5.0%20(Macintosh;%20Intel%20Mac%20OS%20X%2010_15_7)%20AppleWebKit/537.36%20(KHTML,%20like%20Gecko)%20Chrome/107.0.0.0%20Safari/537.36&browser_online=true&tz_name=Asia/Shanghai&identity=audience&room_id=' . $this->liveRoomId . '&heartbeatDuration=0';
        $client = $this->clientFactory->create($wssUrl, ['cookie' => 'ttwid=1|i4eax320w3bbvTc0HYa7mYGI6dDVxI4d4oKW5F6BicM|1662269142|5e99889e30f1a2443f6955b4a1314aefe1687f0ae2a48ebae3eb0fd818f67f58; passport_csrf_token=355d6df700037172efddceb1ba4fb7ce; passport_csrf_token_default=355d6df700037172efddceb1ba4fb7ce; n_mh=bUxOCHzZv5szT8QIHfxmgnjoVlZQ1kn7aM-ZW6ndDKY; session_secure=1; download_guide="3/20221212"; home_can_add_dy_2_desktop="0"; strategyABtestKey="1671212790.834"; LOGIN_STATUS=0; passport_assist_user=Cj3bBbrOgRYhKc0AEk8vgRq6rm_rU3xUl73lJUqBpoiXo9t2dpNB3atSJGKWEyfvabPsz7fcXaf4F6vUwEdgGkgKPA470bPbtuZnh_EtacCZOsNiwAHu9f5pGIqc6r3CyVpraacLGlkooaM02W62D9kgh4MI9eit8yCuofoqvRD4g6QNGImv1lQiAQOn0UmJ; sso_uid_tt=c6a7a526a5f5b3044c2f507c81d49bc9; sso_uid_tt_ss=c6a7a526a5f5b3044c2f507c81d49bc9; toutiao_sso_user=6dab85904d7ad1c8a949f575e0a92cf4; toutiao_sso_user_ss=6dab85904d7ad1c8a949f575e0a92cf4; sid_ucp_sso_v1=1.0.0-KDk1ZDVhYWNkOTk3M2M0ZDdmOWE1MGQ2ODEyMjAyNDYxMjkzMzY0NzIKHQik8Iy7gQMQ3YLznAYY7zEgDDCYxPfbBTgGQPQHGgJsZiIgNmRhYjg1OTA0ZDdhZDFjOGE5NDlmNTc1ZTBhOTJjZjQ; ssid_ucp_sso_v1=1.0.0-KDk1ZDVhYWNkOTk3M2M0ZDdmOWE1MGQ2ODEyMjAyNDYxMjkzMzY0NzIKHQik8Iy7gQMQ3YLznAYY7zEgDDCYxPfbBTgGQPQHGgJsZiIgNmRhYjg1OTA0ZDdhZDFjOGE5NDlmNTc1ZTBhOTJjZjQ; odin_tt=43d7c16238d63facfd68be16af92ea8669c4332b807c8635f53f1a3159db3c96f518adf4ecaef02af8f228dc4cd404c4eb5b64df826a3fbad1b90aa17bacd2bf; passport_auth_status=73160e5a77001802db474510766c2092,f24f4516c18ee1b1771327f013e7bd5d; passport_auth_status_ss=73160e5a77001802db474510766c2092,f24f4516c18ee1b1771327f013e7bd5d; uid_tt=15273106d0445d0b3e9461b21affb4eb; uid_tt_ss=15273106d0445d0b3e9461b21affb4eb; sid_tt=a064dac6207e2e6c0d70d8196f87dfab; sessionid=a064dac6207e2e6c0d70d8196f87dfab; sessionid_ss=a064dac6207e2e6c0d70d8196f87dfab; sid_guard=a064dac6207e2e6c0d70d8196f87dfab|1671217506|5183995|Tue,+14-Feb-2023+19:05:01+GMT; sid_ucp_v1=1.0.0-KDM4YjU1NzM2NzEyMzg5OWM5NzBlYWZmNjM3ZDg5MDE0MGNhM2Y1N2YKFwik8Iy7gQMQ4oLznAYY7zEgDDgGQPQHGgJsZiIgYTA2NGRhYzYyMDdlMmU2YzBkNzBkODE5NmY4N2RmYWI; ssid_ucp_v1=1.0.0-KDM4YjU1NzM2NzEyMzg5OWM5NzBlYWZmNjM3ZDg5MDE0MGNhM2Y1N2YKFwik8Iy7gQMQ4oLznAYY7zEgDDgGQPQHGgJsZiIgYTA2NGRhYzYyMDdlMmU2YzBkNzBkODE5NmY4N2RmYWI; live_can_add_dy_2_desktop="0"; msToken=LGQYk0LG5blMKPr4TKrkhGE9Fx3Od5qbLQESTHUyq6qnFK4ua69xV2SsGJ29Yi5taXhbrDSyk9quu3wR5KR7FJhgxhCg72LuvPGksmdBamxrLGt8ZR91qw=='], false);
        co(function () use ($client) {
            $this->ping($client);
        });
        $pushFrame = new PushFrame();
        $resp = new Response();
        defer(function () use ($client, $pushFrame, $resp, $fd, $server) {
            while ($this->redis->get($this->flag)) {
                Coroutine::sleep(0.1);
                $msg = $client->recv();
                if (! isset($msg->data)) {
                    return;
                }
                $pushFrame->mergeFromString($msg->data);
                $logId = $pushFrame->getLogId();
                $data = gzdecode($pushFrame->getPayload());
                $resp->mergeFromString($data);
                if ($resp->getNeedAck()) {
                    $this->sendAck($client, $logId, $resp->getInternalExt());
                }
                $msgList = $resp->getMessagesList();
                foreach ($msgList as $msg) {
                    if (! $this->redis->get($this->flag)) {
                        return;
                    }
                    switch ($msg->getMethod()) {
                        case 'WebcastChatMessage':
                            $this->WebcastChatMessage($msg->getPayload(), $fd, $server);
                            break;
                        case 'WebcastMemberMessage':
                            $this->WebcastMemberMessage($msg->getPayload(), $fd, $server);
                            break;
                        case 'WebcastGiftMessage':
                            $this->WebcastGiftMessage($msg->getPayload(), $fd, $server);
                            break;
                        case 'WebcastSocialMessage':
                            $this->WebcastSocialMessage($msg->getPayload(), $fd, $server);
                            break;
                        case 'WebcastLikeMessage':
                            $this->WebcastLikeMessage($msg->getPayload(), $fd, $server);
                            break;
                    }
                }
            }
        });
        var_dump('defer end');
    }

    protected function WebcastChatMessage($data, int $fd, Server $server)
    {
        $chatMessage = new ChatMessage();
        $chatMessage->mergeFromString($data);
        $server->push($fd, $chatMessage->serializeToJsonString());
    }

    protected function sendAck(Client $client, int $logId, string $internalExt)
    {
        $obj = new PushFrame();
        $obj->setPayloadType('ack');
        $obj->setLogId($logId);
        $obj->setPayload($internalExt);
        $data = $obj->serializeToString();
        $client->push($data, WEBSOCKET_OPCODE_BINARY);
    }

    protected function getBytes($string): array
    {
        $bytes = [];
        for ($i = 0; $i < strlen($string); ++$i) {
            $bytes[] = ord($string[$i]);
        }
        return $bytes;
    }

    protected function ping(Client $client): void
    {
        $obj = new PushFrame();
        $obj->setPayloadType('hb');
        $data = $obj->serializeToString();
        while ($this->redis->get($this->flag)) {
            $client->push($data, WEBSOCKET_OPCODE_BINARY);
            Coroutine::sleep(10);
            var_dump('ping');
        }
        var_dump('ping end');
    }

    protected function parseLiveRoomUrl(string $url): void
    {
        $options = [
            'headers' => [
                'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
                'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36',
                'cookie' => '__ac_nonce=0638733a400869171be51',
            ],
        ];
        $res = $this->client->get($url, $options);
        $cookies = $res->getHeaders('cookie');
        $cookies = $cookies['Set-Cookie'] ?? [];
        foreach ($cookies as $cookie) {
            if (strstr($cookie, 'ttwid=')) {
                preg_match('/ttwid=(.*?);/', $cookie, $cookie);
                if (isset($cookie[1])) {
                    $this->ttwid = $cookie[1];
                    break;
                }
            }
        }

        $res = $res->getBody()->getContents();
        preg_match('/<script id="RENDER_DATA" type="application\/json">(.*?)<\/script>/', $res, $data);
        if (! isset($data[1])) {
            throw new \Exception('解析直播地址数据失败！');
        }
        $res = $data[1];
        $res = urldecode($res);
        $res = Json::decode($res);

        $roomStore = $res['app']['initialState']['roomStore'] ?? [];
        $this->liveRoomId = $roomStore['roomInfo']['roomId'] ?? '';
        $this->liveRoomTitle = $roomStore['roomInfo']['room']['title'] ?? '';
    }

    // 礼物
    protected function WebcastGiftMessage($data, int $fd, Server $server)
    {
        $giftMessage = new GiftMessage();
        $giftMessage->mergeFromString($data);
        $server->push($fd, $giftMessage->serializeToJsonString());
    }

    // 关注
    protected function WebcastSocialMessage($data, int $fd, Server $server)
    {
        $socialMessage = new SocialMessage();
        $socialMessage->mergeFromString($data);
        $server->push($fd, $socialMessage->serializeToJsonString());
    }

    // 点赞
    protected function WebcastLikeMessage($data, int $fd, Server $server)
    {
        $likeMessage = new LikeMessage();
        $likeMessage->mergeFromString($data);
        $server->push($fd, $likeMessage->serializeToJsonString());
    }
}