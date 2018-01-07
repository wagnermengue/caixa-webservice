<?php
/**
 * User: Wagner Mengue
 * Date: 01/2018
 * Version: 1.0
 *
 * Classe simplificada para preenchimento dos dados para testes do webservice
 *
 * Durante a implementação do envio dos dados, fique atento à quantidade de caracteres que são encaminhados e
 * ao envio de caracteres especiais que podem ultrapassar o limite conforme encoding.
 * Cuide também a formatação dos campos conforme o manual
 *
 */

class Dados
{
    //public $urlIntegracao = 'https://des.barramento.caixa.gov.br/sibar/ManutencaoCobrancaBancaria/Boleto/Externo';
    public $urlIntegracao = 'https://barramento.caixa.gov.br/sibar/ManutencaoCobrancaBancaria/Boleto/Externo';
    public $codigoCedente = ''; //cedente ou beneficiário
    public $nossoNumero = '';
    public $dataVencimento = '';
    public $valorNominal = '';
    public $cnpj = '';
    public $codigoTitulo = '';
    public $dataEmissao = '';

    public $dataJuros = '';
    public $juros = '';

    public $dataMulta = '';
    public $multa = '';

    public $numeroAgencia = '';

    public $infoPagador = array(
        'CPF' => '',
        'NOME' => '',
        'ENDERECO' => array(
            'LOGRADOURO' => '',
            'BAIRRO' => '',
            'CIDADE' => '',
            'UF' => '',
            'CEP' => ''
		)
    );

    /*Caso o pagador seja uma empresa
    public $infoPagador = array(
        'CNPJ' => '',
        'RAZAO_SOCIAL' => '',
        'ENDERECO' => array(
            'LOGRADOURO' => '',
            'BAIRRO' => '',
            'CIDADE' => '',
            'UF' => '',
            'CEP' => ''
		)
    );
    */
}
