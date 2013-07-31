pobot
=====

The meagre code behind https://app.net/po_undirected

Details
-------

An AppDotNetPHP-based stream consumer with a python repost script

```
$app->createStream(array('post')); // returns the stream URL to use as $s
```

ADN Global stream is taken in with the following filter applied, limiting posts to those by (a)po

### [Filter](http://developers.app.net/docs/resources/filter/):

```
{
    "clauses": [
        {
            "field": "/data/user/id",
            "object_type": "post",
            "operator": "equals",
            "value": "4900"
        }
    ],
    "id": "2065",
    "match_policy": "include_any",
    "name": "po_sts"
}
```

Those not starting with an at-sign are passed to the python script
