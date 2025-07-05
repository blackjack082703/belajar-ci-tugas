<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\DiskonModel;

abstract class BaseController extends Controller
{
    protected $request;
    protected $helpers = ['number', 'form'];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        // ✅ WAJIB: aktifkan session service
        $this->session = \Config\Services::session();

        // ✅ Set diskon harian ke session jika tanggal cocok
        $diskonModel = new DiskonModel();
        $diskonHariIni = $diskonModel->where('tanggal', date('Y-m-d'))->first();

        if ($diskonHariIni) {
            session()->set('diskon', $diskonHariIni['nominal']);
        } else {
            session()->remove('diskon');
        }
    }
}
