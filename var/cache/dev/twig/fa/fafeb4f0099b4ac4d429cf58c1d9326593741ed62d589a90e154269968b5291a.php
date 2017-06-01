<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_ef6e3f6ad234795a911cb673f7a5a253670c1bdc25b6d95f7a01dd043b56dd46 extends Twig_Template
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
        $__internal_69bdb2e3e8c999bae212c824ff9c5a44172827395de9831d0494744778734363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69bdb2e3e8c999bae212c824ff9c5a44172827395de9831d0494744778734363->enter($__internal_69bdb2e3e8c999bae212c824ff9c5a44172827395de9831d0494744778734363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_9422bf1e2bd26ac13772636d07dd6f1c52c8448711eea4fa8ddf661dceedaea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9422bf1e2bd26ac13772636d07dd6f1c52c8448711eea4fa8ddf661dceedaea1->enter($__internal_9422bf1e2bd26ac13772636d07dd6f1c52c8448711eea4fa8ddf661dceedaea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_69bdb2e3e8c999bae212c824ff9c5a44172827395de9831d0494744778734363->leave($__internal_69bdb2e3e8c999bae212c824ff9c5a44172827395de9831d0494744778734363_prof);

        
        $__internal_9422bf1e2bd26ac13772636d07dd6f1c52c8448711eea4fa8ddf661dceedaea1->leave($__internal_9422bf1e2bd26ac13772636d07dd6f1c52c8448711eea4fa8ddf661dceedaea1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_43fc62d85068196a8a26722442f4031032d35bfe3ff28a4ea5876587e6cd22de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fc62d85068196a8a26722442f4031032d35bfe3ff28a4ea5876587e6cd22de->enter($__internal_43fc62d85068196a8a26722442f4031032d35bfe3ff28a4ea5876587e6cd22de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8669c67f86b8fcf757c515e7e7749fce23d05be4f3429981a6d6037f49342a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8669c67f86b8fcf757c515e7e7749fce23d05be4f3429981a6d6037f49342a43->enter($__internal_8669c67f86b8fcf757c515e7e7749fce23d05be4f3429981a6d6037f49342a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_8669c67f86b8fcf757c515e7e7749fce23d05be4f3429981a6d6037f49342a43->leave($__internal_8669c67f86b8fcf757c515e7e7749fce23d05be4f3429981a6d6037f49342a43_prof);

        
        $__internal_43fc62d85068196a8a26722442f4031032d35bfe3ff28a4ea5876587e6cd22de->leave($__internal_43fc62d85068196a8a26722442f4031032d35bfe3ff28a4ea5876587e6cd22de_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_246bb7999ce75dbc298516e46d9d06974017b0f088f65323ab1544300920d403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246bb7999ce75dbc298516e46d9d06974017b0f088f65323ab1544300920d403->enter($__internal_246bb7999ce75dbc298516e46d9d06974017b0f088f65323ab1544300920d403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_42610f910ba341eb4766818d5a57f3b6224027b9b483036a8d7adf4d0d114bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42610f910ba341eb4766818d5a57f3b6224027b9b483036a8d7adf4d0d114bd7->enter($__internal_42610f910ba341eb4766818d5a57f3b6224027b9b483036a8d7adf4d0d114bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_42610f910ba341eb4766818d5a57f3b6224027b9b483036a8d7adf4d0d114bd7->leave($__internal_42610f910ba341eb4766818d5a57f3b6224027b9b483036a8d7adf4d0d114bd7_prof);

        
        $__internal_246bb7999ce75dbc298516e46d9d06974017b0f088f65323ab1544300920d403->leave($__internal_246bb7999ce75dbc298516e46d9d06974017b0f088f65323ab1544300920d403_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_03f9723eb62807214370ac3e919f9a8cc2af4b621c5cf48111ee6f121eb00ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f9723eb62807214370ac3e919f9a8cc2af4b621c5cf48111ee6f121eb00ec4->enter($__internal_03f9723eb62807214370ac3e919f9a8cc2af4b621c5cf48111ee6f121eb00ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_fd271bbe12b7eda18a2b1205a136df2dde8da3b3c063506e06c92ec6bc5fe444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd271bbe12b7eda18a2b1205a136df2dde8da3b3c063506e06c92ec6bc5fe444->enter($__internal_fd271bbe12b7eda18a2b1205a136df2dde8da3b3c063506e06c92ec6bc5fe444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fd271bbe12b7eda18a2b1205a136df2dde8da3b3c063506e06c92ec6bc5fe444->leave($__internal_fd271bbe12b7eda18a2b1205a136df2dde8da3b3c063506e06c92ec6bc5fe444_prof);

        
        $__internal_03f9723eb62807214370ac3e919f9a8cc2af4b621c5cf48111ee6f121eb00ec4->leave($__internal_03f9723eb62807214370ac3e919f9a8cc2af4b621c5cf48111ee6f121eb00ec4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
