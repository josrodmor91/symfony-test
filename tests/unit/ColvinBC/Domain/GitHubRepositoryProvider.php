<?php


namespace App\Tests\unit\ColvinBC\Domain;


use JsonException;

class GitHubRepositoryProvider
{
    /**
     * @return array
     * @throws JsonException
     */
    public static function retrieveFollowersBodyReponseFromGitHub(): array
    {
        return json_decode('[
    {
        "login": "jenkoian",
        "id": 131355,
        "node_id": "MDQ6VXNlcjEzMTM1NQ==",
        "avatar_url": "https://avatars.githubusercontent.com/u/131355?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/jenkoian",
        "html_url": "https://github.com/jenkoian",
        "followers_url": "https://api.github.com/users/jenkoian/followers",
        "following_url": "https://api.github.com/users/jenkoian/following{/other_user}",
        "gists_url": "https://api.github.com/users/jenkoian/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/jenkoian/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/jenkoian/subscriptions",
        "organizations_url": "https://api.github.com/users/jenkoian/orgs",
        "repos_url": "https://api.github.com/users/jenkoian/repos",
        "events_url": "https://api.github.com/users/jenkoian/events{/privacy}",
        "received_events_url": "https://api.github.com/users/jenkoian/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "patcon",
        "id": 305339,
        "node_id": "MDQ6VXNlcjMwNTMzOQ==",
        "avatar_url": "https://avatars.githubusercontent.com/u/305339?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/patcon",
        "html_url": "https://github.com/patcon",
        "followers_url": "https://api.github.com/users/patcon/followers",
        "following_url": "https://api.github.com/users/patcon/following{/other_user}",
        "gists_url": "https://api.github.com/users/patcon/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/patcon/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/patcon/subscriptions",
        "organizations_url": "https://api.github.com/users/patcon/orgs",
        "repos_url": "https://api.github.com/users/patcon/repos",
        "events_url": "https://api.github.com/users/patcon/events{/privacy}",
        "received_events_url": "https://api.github.com/users/patcon/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "davidlafon",
        "id": 456101,
        "node_id": "MDQ6VXNlcjQ1NjEwMQ==",
        "avatar_url": "https://avatars.githubusercontent.com/u/456101?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/davidlafon",
        "html_url": "https://github.com/davidlafon",
        "followers_url": "https://api.github.com/users/davidlafon/followers",
        "following_url": "https://api.github.com/users/davidlafon/following{/other_user}",
        "gists_url": "https://api.github.com/users/davidlafon/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/davidlafon/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/davidlafon/subscriptions",
        "organizations_url": "https://api.github.com/users/davidlafon/orgs",
        "repos_url": "https://api.github.com/users/davidlafon/repos",
        "events_url": "https://api.github.com/users/davidlafon/events{/privacy}",
        "received_events_url": "https://api.github.com/users/davidlafon/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "bendavies",
        "id": 625392,
        "node_id": "MDQ6VXNlcjYyNTM5Mg==",
        "avatar_url": "https://avatars.githubusercontent.com/u/625392?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/bendavies",
        "html_url": "https://github.com/bendavies",
        "followers_url": "https://api.github.com/users/bendavies/followers",
        "following_url": "https://api.github.com/users/bendavies/following{/other_user}",
        "gists_url": "https://api.github.com/users/bendavies/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/bendavies/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/bendavies/subscriptions",
        "organizations_url": "https://api.github.com/users/bendavies/orgs",
        "repos_url": "https://api.github.com/users/bendavies/repos",
        "events_url": "https://api.github.com/users/bendavies/events{/privacy}",
        "received_events_url": "https://api.github.com/users/bendavies/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "inalgnu",
        "id": 665908,
        "node_id": "MDQ6VXNlcjY2NTkwOA==",
        "avatar_url": "https://avatars.githubusercontent.com/u/665908?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/inalgnu",
        "html_url": "https://github.com/inalgnu",
        "followers_url": "https://api.github.com/users/inalgnu/followers",
        "following_url": "https://api.github.com/users/inalgnu/following{/other_user}",
        "gists_url": "https://api.github.com/users/inalgnu/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/inalgnu/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/inalgnu/subscriptions",
        "organizations_url": "https://api.github.com/users/inalgnu/orgs",
        "repos_url": "https://api.github.com/users/inalgnu/repos",
        "events_url": "https://api.github.com/users/inalgnu/events{/privacy}",
        "received_events_url": "https://api.github.com/users/inalgnu/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "butterscotchstallion",
        "id": 700364,
        "node_id": "MDQ6VXNlcjcwMDM2NA==",
        "avatar_url": "https://avatars.githubusercontent.com/u/700364?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/butterscotchstallion",
        "html_url": "https://github.com/butterscotchstallion",
        "followers_url": "https://api.github.com/users/butterscotchstallion/followers",
        "following_url": "https://api.github.com/users/butterscotchstallion/following{/other_user}",
        "gists_url": "https://api.github.com/users/butterscotchstallion/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/butterscotchstallion/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/butterscotchstallion/subscriptions",
        "organizations_url": "https://api.github.com/users/butterscotchstallion/orgs",
        "repos_url": "https://api.github.com/users/butterscotchstallion/repos",
        "events_url": "https://api.github.com/users/butterscotchstallion/events{/privacy}",
        "received_events_url": "https://api.github.com/users/butterscotchstallion/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "ch3ric",
        "id": 858068,
        "node_id": "MDQ6VXNlcjg1ODA2OA==",
        "avatar_url": "https://avatars.githubusercontent.com/u/858068?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/ch3ric",
        "html_url": "https://github.com/ch3ric",
        "followers_url": "https://api.github.com/users/ch3ric/followers",
        "following_url": "https://api.github.com/users/ch3ric/following{/other_user}",
        "gists_url": "https://api.github.com/users/ch3ric/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/ch3ric/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/ch3ric/subscriptions",
        "organizations_url": "https://api.github.com/users/ch3ric/orgs",
        "repos_url": "https://api.github.com/users/ch3ric/repos",
        "events_url": "https://api.github.com/users/ch3ric/events{/privacy}",
        "received_events_url": "https://api.github.com/users/ch3ric/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "beatgeb",
        "id": 922337,
        "node_id": "MDQ6VXNlcjkyMjMzNw==",
        "avatar_url": "https://avatars.githubusercontent.com/u/922337?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/beatgeb",
        "html_url": "https://github.com/beatgeb",
        "followers_url": "https://api.github.com/users/beatgeb/followers",
        "following_url": "https://api.github.com/users/beatgeb/following{/other_user}",
        "gists_url": "https://api.github.com/users/beatgeb/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/beatgeb/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/beatgeb/subscriptions",
        "organizations_url": "https://api.github.com/users/beatgeb/orgs",
        "repos_url": "https://api.github.com/users/beatgeb/repos",
        "events_url": "https://api.github.com/users/beatgeb/events{/privacy}",
        "received_events_url": "https://api.github.com/users/beatgeb/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "theferrer",
        "id": 1560271,
        "node_id": "MDQ6VXNlcjE1NjAyNzE=",
        "avatar_url": "https://avatars.githubusercontent.com/u/1560271?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/theferrer",
        "html_url": "https://github.com/theferrer",
        "followers_url": "https://api.github.com/users/theferrer/followers",
        "following_url": "https://api.github.com/users/theferrer/following{/other_user}",
        "gists_url": "https://api.github.com/users/theferrer/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/theferrer/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/theferrer/subscriptions",
        "organizations_url": "https://api.github.com/users/theferrer/orgs",
        "repos_url": "https://api.github.com/users/theferrer/repos",
        "events_url": "https://api.github.com/users/theferrer/events{/privacy}",
        "received_events_url": "https://api.github.com/users/theferrer/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "qpautrat",
        "id": 1844413,
        "node_id": "MDQ6VXNlcjE4NDQ0MTM=",
        "avatar_url": "https://avatars.githubusercontent.com/u/1844413?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/qpautrat",
        "html_url": "https://github.com/qpautrat",
        "followers_url": "https://api.github.com/users/qpautrat/followers",
        "following_url": "https://api.github.com/users/qpautrat/following{/other_user}",
        "gists_url": "https://api.github.com/users/qpautrat/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/qpautrat/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/qpautrat/subscriptions",
        "organizations_url": "https://api.github.com/users/qpautrat/orgs",
        "repos_url": "https://api.github.com/users/qpautrat/repos",
        "events_url": "https://api.github.com/users/qpautrat/events{/privacy}",
        "received_events_url": "https://api.github.com/users/qpautrat/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "marvin",
        "id": 557,
        "node_id": "MDQ6VXNlcjU1Nw==",
        "avatar_url": "https://avatars.githubusercontent.com/u/557?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/marvin",
        "html_url": "https://github.com/marvin",
        "followers_url": "https://api.github.com/users/marvin/followers",
        "following_url": "https://api.github.com/users/marvin/following{/other_user}",
        "gists_url": "https://api.github.com/users/marvin/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/marvin/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/marvin/subscriptions",
        "organizations_url": "https://api.github.com/users/marvin/orgs",
        "repos_url": "https://api.github.com/users/marvin/repos",
        "events_url": "https://api.github.com/users/marvin/events{/privacy}",
        "received_events_url": "https://api.github.com/users/marvin/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "kirooshu",
        "id": 577,
        "node_id": "MDQ6VXNlcjU3Nw==",
        "avatar_url": "https://avatars.githubusercontent.com/u/577?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/kirooshu",
        "html_url": "https://github.com/kirooshu",
        "followers_url": "https://api.github.com/users/kirooshu/followers",
        "following_url": "https://api.github.com/users/kirooshu/following{/other_user}",
        "gists_url": "https://api.github.com/users/kirooshu/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/kirooshu/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/kirooshu/subscriptions",
        "organizations_url": "https://api.github.com/users/kirooshu/orgs",
        "repos_url": "https://api.github.com/users/kirooshu/repos",
        "events_url": "https://api.github.com/users/kirooshu/events{/privacy}",
        "received_events_url": "https://api.github.com/users/kirooshu/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "Sija",
        "id": 988,
        "node_id": "MDQ6VXNlcjk4OA==",
        "avatar_url": "https://avatars.githubusercontent.com/u/988?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/Sija",
        "html_url": "https://github.com/Sija",
        "followers_url": "https://api.github.com/users/Sija/followers",
        "following_url": "https://api.github.com/users/Sija/following{/other_user}",
        "gists_url": "https://api.github.com/users/Sija/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/Sija/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/Sija/subscriptions",
        "organizations_url": "https://api.github.com/users/Sija/orgs",
        "repos_url": "https://api.github.com/users/Sija/repos",
        "events_url": "https://api.github.com/users/Sija/events{/privacy}",
        "received_events_url": "https://api.github.com/users/Sija/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "gruner",
        "id": 2345,
        "node_id": "MDQ6VXNlcjIzNDU=",
        "avatar_url": "https://avatars.githubusercontent.com/u/2345?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/gruner",
        "html_url": "https://github.com/gruner",
        "followers_url": "https://api.github.com/users/gruner/followers",
        "following_url": "https://api.github.com/users/gruner/following{/other_user}",
        "gists_url": "https://api.github.com/users/gruner/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/gruner/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/gruner/subscriptions",
        "organizations_url": "https://api.github.com/users/gruner/orgs",
        "repos_url": "https://api.github.com/users/gruner/repos",
        "events_url": "https://api.github.com/users/gruner/events{/privacy}",
        "received_events_url": "https://api.github.com/users/gruner/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "pfefferle",
        "id": 2373,
        "node_id": "MDQ6VXNlcjIzNzM=",
        "avatar_url": "https://avatars.githubusercontent.com/u/2373?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/pfefferle",
        "html_url": "https://github.com/pfefferle",
        "followers_url": "https://api.github.com/users/pfefferle/followers",
        "following_url": "https://api.github.com/users/pfefferle/following{/other_user}",
        "gists_url": "https://api.github.com/users/pfefferle/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/pfefferle/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/pfefferle/subscriptions",
        "organizations_url": "https://api.github.com/users/pfefferle/orgs",
        "repos_url": "https://api.github.com/users/pfefferle/repos",
        "events_url": "https://api.github.com/users/pfefferle/events{/privacy}",
        "received_events_url": "https://api.github.com/users/pfefferle/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "poulikov",
        "id": 2836,
        "node_id": "MDQ6VXNlcjI4MzY=",
        "avatar_url": "https://avatars.githubusercontent.com/u/2836?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/poulikov",
        "html_url": "https://github.com/poulikov",
        "followers_url": "https://api.github.com/users/poulikov/followers",
        "following_url": "https://api.github.com/users/poulikov/following{/other_user}",
        "gists_url": "https://api.github.com/users/poulikov/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/poulikov/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/poulikov/subscriptions",
        "organizations_url": "https://api.github.com/users/poulikov/orgs",
        "repos_url": "https://api.github.com/users/poulikov/repos",
        "events_url": "https://api.github.com/users/poulikov/events{/privacy}",
        "received_events_url": "https://api.github.com/users/poulikov/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "nikolay",
        "id": 2882,
        "node_id": "MDQ6VXNlcjI4ODI=",
        "avatar_url": "https://avatars.githubusercontent.com/u/2882?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/nikolay",
        "html_url": "https://github.com/nikolay",
        "followers_url": "https://api.github.com/users/nikolay/followers",
        "following_url": "https://api.github.com/users/nikolay/following{/other_user}",
        "gists_url": "https://api.github.com/users/nikolay/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/nikolay/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/nikolay/subscriptions",
        "organizations_url": "https://api.github.com/users/nikolay/orgs",
        "repos_url": "https://api.github.com/users/nikolay/repos",
        "events_url": "https://api.github.com/users/nikolay/events{/privacy}",
        "received_events_url": "https://api.github.com/users/nikolay/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "stinie",
        "id": 3000,
        "node_id": "MDQ6VXNlcjMwMDA=",
        "avatar_url": "https://avatars.githubusercontent.com/u/3000?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/stinie",
        "html_url": "https://github.com/stinie",
        "followers_url": "https://api.github.com/users/stinie/followers",
        "following_url": "https://api.github.com/users/stinie/following{/other_user}",
        "gists_url": "https://api.github.com/users/stinie/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/stinie/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/stinie/subscriptions",
        "organizations_url": "https://api.github.com/users/stinie/orgs",
        "repos_url": "https://api.github.com/users/stinie/repos",
        "events_url": "https://api.github.com/users/stinie/events{/privacy}",
        "received_events_url": "https://api.github.com/users/stinie/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "fain182",
        "id": 5879,
        "node_id": "MDQ6VXNlcjU4Nzk=",
        "avatar_url": "https://avatars.githubusercontent.com/u/5879?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/fain182",
        "html_url": "https://github.com/fain182",
        "followers_url": "https://api.github.com/users/fain182/followers",
        "following_url": "https://api.github.com/users/fain182/following{/other_user}",
        "gists_url": "https://api.github.com/users/fain182/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/fain182/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/fain182/subscriptions",
        "organizations_url": "https://api.github.com/users/fain182/orgs",
        "repos_url": "https://api.github.com/users/fain182/repos",
        "events_url": "https://api.github.com/users/fain182/events{/privacy}",
        "received_events_url": "https://api.github.com/users/fain182/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "jchatard",
        "id": 6790,
        "node_id": "MDQ6VXNlcjY3OTA=",
        "avatar_url": "https://avatars.githubusercontent.com/u/6790?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/jchatard",
        "html_url": "https://github.com/jchatard",
        "followers_url": "https://api.github.com/users/jchatard/followers",
        "following_url": "https://api.github.com/users/jchatard/following{/other_user}",
        "gists_url": "https://api.github.com/users/jchatard/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/jchatard/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/jchatard/subscriptions",
        "organizations_url": "https://api.github.com/users/jchatard/orgs",
        "repos_url": "https://api.github.com/users/jchatard/repos",
        "events_url": "https://api.github.com/users/jchatard/events{/privacy}",
        "received_events_url": "https://api.github.com/users/jchatard/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "alfredwesterveld",
        "id": 7066,
        "node_id": "MDQ6VXNlcjcwNjY=",
        "avatar_url": "https://avatars.githubusercontent.com/u/7066?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/alfredwesterveld",
        "html_url": "https://github.com/alfredwesterveld",
        "followers_url": "https://api.github.com/users/alfredwesterveld/followers",
        "following_url": "https://api.github.com/users/alfredwesterveld/following{/other_user}",
        "gists_url": "https://api.github.com/users/alfredwesterveld/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/alfredwesterveld/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/alfredwesterveld/subscriptions",
        "organizations_url": "https://api.github.com/users/alfredwesterveld/orgs",
        "repos_url": "https://api.github.com/users/alfredwesterveld/repos",
        "events_url": "https://api.github.com/users/alfredwesterveld/events{/privacy}",
        "received_events_url": "https://api.github.com/users/alfredwesterveld/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "paolomainardi",
        "id": 8747,
        "node_id": "MDQ6VXNlcjg3NDc=",
        "avatar_url": "https://avatars.githubusercontent.com/u/8747?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/paolomainardi",
        "html_url": "https://github.com/paolomainardi",
        "followers_url": "https://api.github.com/users/paolomainardi/followers",
        "following_url": "https://api.github.com/users/paolomainardi/following{/other_user}",
        "gists_url": "https://api.github.com/users/paolomainardi/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/paolomainardi/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/paolomainardi/subscriptions",
        "organizations_url": "https://api.github.com/users/paolomainardi/orgs",
        "repos_url": "https://api.github.com/users/paolomainardi/repos",
        "events_url": "https://api.github.com/users/paolomainardi/events{/privacy}",
        "received_events_url": "https://api.github.com/users/paolomainardi/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "co3k",
        "id": 9206,
        "node_id": "MDQ6VXNlcjkyMDY=",
        "avatar_url": "https://avatars.githubusercontent.com/u/9206?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/co3k",
        "html_url": "https://github.com/co3k",
        "followers_url": "https://api.github.com/users/co3k/followers",
        "following_url": "https://api.github.com/users/co3k/following{/other_user}",
        "gists_url": "https://api.github.com/users/co3k/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/co3k/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/co3k/subscriptions",
        "organizations_url": "https://api.github.com/users/co3k/orgs",
        "repos_url": "https://api.github.com/users/co3k/repos",
        "events_url": "https://api.github.com/users/co3k/events{/privacy}",
        "received_events_url": "https://api.github.com/users/co3k/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "davidwinter",
        "id": 9681,
        "node_id": "MDQ6VXNlcjk2ODE=",
        "avatar_url": "https://avatars.githubusercontent.com/u/9681?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/davidwinter",
        "html_url": "https://github.com/davidwinter",
        "followers_url": "https://api.github.com/users/davidwinter/followers",
        "following_url": "https://api.github.com/users/davidwinter/following{/other_user}",
        "gists_url": "https://api.github.com/users/davidwinter/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/davidwinter/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/davidwinter/subscriptions",
        "organizations_url": "https://api.github.com/users/davidwinter/orgs",
        "repos_url": "https://api.github.com/users/davidwinter/repos",
        "events_url": "https://api.github.com/users/davidwinter/events{/privacy}",
        "received_events_url": "https://api.github.com/users/davidwinter/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "elliot",
        "id": 9938,
        "node_id": "MDQ6VXNlcjk5Mzg=",
        "avatar_url": "https://avatars.githubusercontent.com/u/9938?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/elliot",
        "html_url": "https://github.com/elliot",
        "followers_url": "https://api.github.com/users/elliot/followers",
        "following_url": "https://api.github.com/users/elliot/following{/other_user}",
        "gists_url": "https://api.github.com/users/elliot/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/elliot/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/elliot/subscriptions",
        "organizations_url": "https://api.github.com/users/elliot/orgs",
        "repos_url": "https://api.github.com/users/elliot/repos",
        "events_url": "https://api.github.com/users/elliot/events{/privacy}",
        "received_events_url": "https://api.github.com/users/elliot/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "thrashr888",
        "id": 10213,
        "node_id": "MDQ6VXNlcjEwMjEz",
        "avatar_url": "https://avatars.githubusercontent.com/u/10213?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/thrashr888",
        "html_url": "https://github.com/thrashr888",
        "followers_url": "https://api.github.com/users/thrashr888/followers",
        "following_url": "https://api.github.com/users/thrashr888/following{/other_user}",
        "gists_url": "https://api.github.com/users/thrashr888/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/thrashr888/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/thrashr888/subscriptions",
        "organizations_url": "https://api.github.com/users/thrashr888/orgs",
        "repos_url": "https://api.github.com/users/thrashr888/repos",
        "events_url": "https://api.github.com/users/thrashr888/events{/privacy}",
        "received_events_url": "https://api.github.com/users/thrashr888/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "wrobel",
        "id": 10232,
        "node_id": "MDQ6VXNlcjEwMjMy",
        "avatar_url": "https://avatars.githubusercontent.com/u/10232?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/wrobel",
        "html_url": "https://github.com/wrobel",
        "followers_url": "https://api.github.com/users/wrobel/followers",
        "following_url": "https://api.github.com/users/wrobel/following{/other_user}",
        "gists_url": "https://api.github.com/users/wrobel/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/wrobel/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/wrobel/subscriptions",
        "organizations_url": "https://api.github.com/users/wrobel/orgs",
        "repos_url": "https://api.github.com/users/wrobel/repos",
        "events_url": "https://api.github.com/users/wrobel/events{/privacy}",
        "received_events_url": "https://api.github.com/users/wrobel/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "inty",
        "id": 10284,
        "node_id": "MDQ6VXNlcjEwMjg0",
        "avatar_url": "https://avatars.githubusercontent.com/u/10284?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/inty",
        "html_url": "https://github.com/inty",
        "followers_url": "https://api.github.com/users/inty/followers",
        "following_url": "https://api.github.com/users/inty/following{/other_user}",
        "gists_url": "https://api.github.com/users/inty/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/inty/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/inty/subscriptions",
        "organizations_url": "https://api.github.com/users/inty/orgs",
        "repos_url": "https://api.github.com/users/inty/repos",
        "events_url": "https://api.github.com/users/inty/events{/privacy}",
        "received_events_url": "https://api.github.com/users/inty/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "jeans",
        "id": 10599,
        "node_id": "MDQ6VXNlcjEwNTk5",
        "avatar_url": "https://avatars.githubusercontent.com/u/10599?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/jeans",
        "html_url": "https://github.com/jeans",
        "followers_url": "https://api.github.com/users/jeans/followers",
        "following_url": "https://api.github.com/users/jeans/following{/other_user}",
        "gists_url": "https://api.github.com/users/jeans/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/jeans/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/jeans/subscriptions",
        "organizations_url": "https://api.github.com/users/jeans/orgs",
        "repos_url": "https://api.github.com/users/jeans/repos",
        "events_url": "https://api.github.com/users/jeans/events{/privacy}",
        "received_events_url": "https://api.github.com/users/jeans/received_events",
        "type": "User",
        "site_admin": false
    },
    {
        "login": "ubermuda",
        "id": 10758,
        "node_id": "MDQ6VXNlcjEwNzU4",
        "avatar_url": "https://avatars.githubusercontent.com/u/10758?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/ubermuda",
        "html_url": "https://github.com/ubermuda",
        "followers_url": "https://api.github.com/users/ubermuda/followers",
        "following_url": "https://api.github.com/users/ubermuda/following{/other_user}",
        "gists_url": "https://api.github.com/users/ubermuda/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/ubermuda/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/ubermuda/subscriptions",
        "organizations_url": "https://api.github.com/users/ubermuda/orgs",
        "repos_url": "https://api.github.com/users/ubermuda/repos",
        "events_url": "https://api.github.com/users/ubermuda/events{/privacy}",
        "received_events_url": "https://api.github.com/users/ubermuda/received_events",
        "type": "User",
        "site_admin": false
    }
]', false, 512, JSON_THROW_ON_ERROR);
    }
}