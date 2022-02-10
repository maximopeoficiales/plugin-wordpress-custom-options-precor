<?php
class WsStockPrecor extends SoapHeader
{
    private $wss_ns = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';

    public function __construct($user, $pass, $ns = null)
    {

        $auth = new stdClass();
        $auth->Username = new SoapVar($user, XSD_STRING, NULL, $this->wss_ns, NULL, $this->wss_ns);
        $auth->Password = new SoapVar($pass, XSD_STRING, NULL, $this->wss_ns, NULL, $this->wss_ns);

        $username_token = new stdClass();
        $username_token->UsernameToken = new SoapVar($auth, SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'UsernameToken', $this->wss_ns);

        $security_sv = new SoapVar(
            new SoapVar($username_token, SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'UsernameToken', $this->wss_ns),
            SOAP_ENC_OBJECT,
            NULL,
            $this->wss_ns,
            'Security',
            $this->wss_ns
        );
        parent::__construct($this->wss_ns, 'Security', $security_sv, true);
    }
}


function getServiceWsStosk(): SoapClient
{
    $wsdl = "https://ws.sunat.gob.pe/ws/v2/controladuanero/ReconocimientoFisicoService.htm?wsdl";
    $username = "20422696548S1STEMAS";
    $password = "S1STEMAS";

    $wsse_header = new WsStockPrecor($username, $password);
    $client = new SoapClient($wsdl, array(
        'trace' => true,
    ));
    $client->__setSoapHeaders(array($wsse_header));
    return $client;
}
