<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_227bf05438f4c997854767723c58bf4578b66eb4f3a59fe8dc8d8d7716f7685d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed7e5f82a66ca680448c7de604c502595947d85f5d98ad82edff6bf96a93e66e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7e5f82a66ca680448c7de604c502595947d85f5d98ad82edff6bf96a93e66e->enter($__internal_ed7e5f82a66ca680448c7de604c502595947d85f5d98ad82edff6bf96a93e66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c14a414953a8a8c276d97523354cdea546ee8ed3e036fcf7584692c2065a67d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14a414953a8a8c276d97523354cdea546ee8ed3e036fcf7584692c2065a67d9->enter($__internal_c14a414953a8a8c276d97523354cdea546ee8ed3e036fcf7584692c2065a67d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ed7e5f82a66ca680448c7de604c502595947d85f5d98ad82edff6bf96a93e66e->leave($__internal_ed7e5f82a66ca680448c7de604c502595947d85f5d98ad82edff6bf96a93e66e_prof);

        
        $__internal_c14a414953a8a8c276d97523354cdea546ee8ed3e036fcf7584692c2065a67d9->leave($__internal_c14a414953a8a8c276d97523354cdea546ee8ed3e036fcf7584692c2065a67d9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f8b782a6c8bf33fced346b24bb99737d41396ce3494ef306302ecaafbf1fd157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b782a6c8bf33fced346b24bb99737d41396ce3494ef306302ecaafbf1fd157->enter($__internal_f8b782a6c8bf33fced346b24bb99737d41396ce3494ef306302ecaafbf1fd157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4e17670068478a31a483d642134bfb920c893ad7bfc07d9cd038c67fc41b2ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e17670068478a31a483d642134bfb920c893ad7bfc07d9cd038c67fc41b2ddd->enter($__internal_4e17670068478a31a483d642134bfb920c893ad7bfc07d9cd038c67fc41b2ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_4e17670068478a31a483d642134bfb920c893ad7bfc07d9cd038c67fc41b2ddd->leave($__internal_4e17670068478a31a483d642134bfb920c893ad7bfc07d9cd038c67fc41b2ddd_prof);

        
        $__internal_f8b782a6c8bf33fced346b24bb99737d41396ce3494ef306302ecaafbf1fd157->leave($__internal_f8b782a6c8bf33fced346b24bb99737d41396ce3494ef306302ecaafbf1fd157_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_715428c80ba8a4582d003f9e1168a93f726e1398105d12ee1dcf7bfe6c19af3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715428c80ba8a4582d003f9e1168a93f726e1398105d12ee1dcf7bfe6c19af3b->enter($__internal_715428c80ba8a4582d003f9e1168a93f726e1398105d12ee1dcf7bfe6c19af3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a39b254ab2f380f36d4e9ddf12f57ac1aa9f5e078466a15b870e92f1c05ae738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39b254ab2f380f36d4e9ddf12f57ac1aa9f5e078466a15b870e92f1c05ae738->enter($__internal_a39b254ab2f380f36d4e9ddf12f57ac1aa9f5e078466a15b870e92f1c05ae738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a39b254ab2f380f36d4e9ddf12f57ac1aa9f5e078466a15b870e92f1c05ae738->leave($__internal_a39b254ab2f380f36d4e9ddf12f57ac1aa9f5e078466a15b870e92f1c05ae738_prof);

        
        $__internal_715428c80ba8a4582d003f9e1168a93f726e1398105d12ee1dcf7bfe6c19af3b->leave($__internal_715428c80ba8a4582d003f9e1168a93f726e1398105d12ee1dcf7bfe6c19af3b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1cbf80449937b19ef351f2d96e707587717f9da327ab8af5ccbc97a032ee55b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cbf80449937b19ef351f2d96e707587717f9da327ab8af5ccbc97a032ee55b6->enter($__internal_1cbf80449937b19ef351f2d96e707587717f9da327ab8af5ccbc97a032ee55b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_39433179f60a6da542af653ad98a91c762c460ba2034c239cb2e83383a967ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39433179f60a6da542af653ad98a91c762c460ba2034c239cb2e83383a967ba9->enter($__internal_39433179f60a6da542af653ad98a91c762c460ba2034c239cb2e83383a967ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_39433179f60a6da542af653ad98a91c762c460ba2034c239cb2e83383a967ba9->leave($__internal_39433179f60a6da542af653ad98a91c762c460ba2034c239cb2e83383a967ba9_prof);

        
        $__internal_1cbf80449937b19ef351f2d96e707587717f9da327ab8af5ccbc97a032ee55b6->leave($__internal_1cbf80449937b19ef351f2d96e707587717f9da327ab8af5ccbc97a032ee55b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
