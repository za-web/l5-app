<?php namespace App\Providers;

use Exception;
use Illuminate\Contracts\Debug\ExceptionHandler as ExceptionHandlerContract;
use Illuminate\Http\Response;
use Psr\Log\LoggerInterface;

class ExceptionHandler implements ExceptionHandlerContract
{

    /**
     * The log implementation.
     *
     * @var \Psr\Log\LoggerInterface
     */
    protected $log;

    /**
     * Create a new exception handler instance.
     *
     * @param \Psr\Log\LoggerInterface $log
     * @return void
     */
    public function __construct(LoggerInterface $log)
    {

        $this->log = $log;

    }

    /**
     * Report or log an exception.
     *
     * @param \Exception $e
     * @return void
     */
    public function report(Exception $e)
    {

        $this->log->error((string)$e);

    }

    /**
     * Render an exception into a response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception $e
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $e)
    {

        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());

        return new Response($whoops->handleException($e)); //, $e->getStatusCode(), $e->getHeaders()

    }

    /**
     * Render an exception to the console.
     *
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @param \Exception $e
     * @return void
     */
    public function renderForConsole($output, Exception $e)
    {

        $output->writeln((string)$e);

    }

}