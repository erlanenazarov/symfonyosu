<?php

namespace OSU\AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ContactsController extends AbstractController
{
    public function contactAction(Request $request)
    {
        return $this->render('OSUAppBundle:Contacts:contact.html.twig', array_merge($this->generateViewParams($request), array(
            'location' => 'contact'
        )));
    }

    public function sendMailAction(Request $request) {
        if($request->getMethod() == 'POST') {
            $form = $this->buildContactForm()->submit($request);

            if($form->isValid()) {
                $data = $form->getData();

                $name = $data['name'];
                $email = $data['email'];
                $phone = $data['phone'];

                $swift = $this->get('swiftmailer.mailer.default');
                $templateEngine = $this->get('templating');

                $subject = 'Submitted from form on website!';
                $content = $templateEngine->render('@OSUApp/Contacts/mail_template.hrml.twig', array(
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'date' => date('d-m-Y')
                ));

                $recipient = $this->getDoctrine()->getManager()->getRepository('OSUEntityBundle:Contacts')->find(1)->getEmail();

                $message = new \Swift_Message($subject, $content, 'text/html', 'utf-8');
                $message->setTo(array(
                    $recipient
                ));
                $message->setFrom(array(
                    $recipient
                ));

                if($swift->send($message)) {
                    return new JsonResponse(array(
                        'result' => 'ok'
                    ));
                } else {
                    return new JsonResponse(array(
                        'result' => 'fail',
                        'message' => 'Server response error'
                    ));
                }
            } else {
                return new JsonResponse(array(
                    'result' => 'fail',
                    'message' => 'Valid error'
                ));
            }
        } else {
            return new JsonResponse(array(
                'result' => 'fail',
                'message' => 'Method must be POST'
            ));
        }
    }

}
