<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9eb7b8fd9e2c07e3882b21b47f9eca86a1687d5e8a259200b7213b7dd114242d extends Twig_Template
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
        $__internal_6672ce199fbb8828482b0d7e253c84936baf38392c7f1bac08a32e641b6ad491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6672ce199fbb8828482b0d7e253c84936baf38392c7f1bac08a32e641b6ad491->enter($__internal_6672ce199fbb8828482b0d7e253c84936baf38392c7f1bac08a32e641b6ad491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_31feabc9c539daf9b1edf7b173fe4c761ec4e22fa83c4894e65eb922946bd07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31feabc9c539daf9b1edf7b173fe4c761ec4e22fa83c4894e65eb922946bd07a->enter($__internal_31feabc9c539daf9b1edf7b173fe4c761ec4e22fa83c4894e65eb922946bd07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6672ce199fbb8828482b0d7e253c84936baf38392c7f1bac08a32e641b6ad491->leave($__internal_6672ce199fbb8828482b0d7e253c84936baf38392c7f1bac08a32e641b6ad491_prof);

        
        $__internal_31feabc9c539daf9b1edf7b173fe4c761ec4e22fa83c4894e65eb922946bd07a->leave($__internal_31feabc9c539daf9b1edf7b173fe4c761ec4e22fa83c4894e65eb922946bd07a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6d31397cc622d878fb382591703e2316dcff5a0dc99b72d744b267075da29f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d31397cc622d878fb382591703e2316dcff5a0dc99b72d744b267075da29f95->enter($__internal_6d31397cc622d878fb382591703e2316dcff5a0dc99b72d744b267075da29f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_29a72969736cbe7ae0a73d113171cbf5dae78fcc7dce7a502c113fd32969479a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a72969736cbe7ae0a73d113171cbf5dae78fcc7dce7a502c113fd32969479a->enter($__internal_29a72969736cbe7ae0a73d113171cbf5dae78fcc7dce7a502c113fd32969479a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_29a72969736cbe7ae0a73d113171cbf5dae78fcc7dce7a502c113fd32969479a->leave($__internal_29a72969736cbe7ae0a73d113171cbf5dae78fcc7dce7a502c113fd32969479a_prof);

        
        $__internal_6d31397cc622d878fb382591703e2316dcff5a0dc99b72d744b267075da29f95->leave($__internal_6d31397cc622d878fb382591703e2316dcff5a0dc99b72d744b267075da29f95_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_846e47f41ae118c7aa53456d504b74c54e4f58630cb6091aef5b901ecd7be273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846e47f41ae118c7aa53456d504b74c54e4f58630cb6091aef5b901ecd7be273->enter($__internal_846e47f41ae118c7aa53456d504b74c54e4f58630cb6091aef5b901ecd7be273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9d748e6f236929503e4df140b382625e4b1e00f0e348e5e4d600ec77ca8aa6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d748e6f236929503e4df140b382625e4b1e00f0e348e5e4d600ec77ca8aa6dc->enter($__internal_9d748e6f236929503e4df140b382625e4b1e00f0e348e5e4d600ec77ca8aa6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9d748e6f236929503e4df140b382625e4b1e00f0e348e5e4d600ec77ca8aa6dc->leave($__internal_9d748e6f236929503e4df140b382625e4b1e00f0e348e5e4d600ec77ca8aa6dc_prof);

        
        $__internal_846e47f41ae118c7aa53456d504b74c54e4f58630cb6091aef5b901ecd7be273->leave($__internal_846e47f41ae118c7aa53456d504b74c54e4f58630cb6091aef5b901ecd7be273_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_87001e50d23871537f157bad3585a54d99210c9fb389964fb18eed3be1f9126c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87001e50d23871537f157bad3585a54d99210c9fb389964fb18eed3be1f9126c->enter($__internal_87001e50d23871537f157bad3585a54d99210c9fb389964fb18eed3be1f9126c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_afd13f5ea3a491128343e30b99f6def4d37f6a2ffad7bf9274c5486d4ff61bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd13f5ea3a491128343e30b99f6def4d37f6a2ffad7bf9274c5486d4ff61bd0->enter($__internal_afd13f5ea3a491128343e30b99f6def4d37f6a2ffad7bf9274c5486d4ff61bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_afd13f5ea3a491128343e30b99f6def4d37f6a2ffad7bf9274c5486d4ff61bd0->leave($__internal_afd13f5ea3a491128343e30b99f6def4d37f6a2ffad7bf9274c5486d4ff61bd0_prof);

        
        $__internal_87001e50d23871537f157bad3585a54d99210c9fb389964fb18eed3be1f9126c->leave($__internal_87001e50d23871537f157bad3585a54d99210c9fb389964fb18eed3be1f9126c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
