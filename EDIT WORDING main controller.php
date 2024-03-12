namespace app\controllers;
use app\core\Controller;
use app\models\Post;

class MainController extends Controller
{
    protected $twig;
    public function homepage()
    {
        $template = $this->twig->load('main/website.twig');
        $homepageData = [
            'title' => “Muna “Saed’s Website,
        ];

        echo $template->render($homepageData);
    }

    public function notFound() {

        $template = $this->twig->load('notFound/notFound.twig');
        http_response_code(404);
        echo $template->render(); 

    }   
}
