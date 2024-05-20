<?php
class AfspraakController extends Controller
{
    public function create()
    {
        $model = new AfspraakModel();
        $data = $this->request->getPost();

        if ($model->save($data)) {
            $this->response->redirect('afspraak/index');
        } else {
            $this->view->render('afspraak/create', ['errors' => $model->getErrors()]);
        }
    }
}
?>
<?php
class AfspraakController extends Controller
{
    public function readAll()
    {
        $model = new AfspraakModel();
        $data = $model->readAllOrderedByDateDesc();
        $this->view->render('afspraak/read', ['data' => $data]);
    }
}
?>