#!/bin/bash
curl -X PUT -H "Content-Type: application/json" -H "Authorization: Basic YWRtaW46YWRtaW4=" -H "Cache-Control: no-cache" -H "Postman-Token: 8eff5a0a-93a3-1acf-4790-27407130cd6c" -d '{
    "name": "myflowname",
    "nwSrc": "10.0.0.1",
    "installInHw": "true",
    "priority": "501",
    "etherType": "0x800",
    "actions": [
        "DROP"
    ],
    "node": {
        "id": "00:00:00:00:00:00:00:01",
        "type": "OF"
    }
}' http://opendaylights.cloudapp.net:8080/controller/nb/v2/flowprogrammer/default/node/OF/00:00:00:00:00:00:00:01/staticFlow/myflowname
echo "Content-type: text/html"
#echo ""
#echo "<html><head><title>Interrupting Flow</title></head>"
#echo "<body>"
#echo "Flow between 10.0.0.1 and 10.0.0.2 should be stopped."
#echo "</body></html>"
