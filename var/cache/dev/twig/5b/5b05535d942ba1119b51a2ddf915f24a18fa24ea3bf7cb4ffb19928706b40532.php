<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0ed43657211e2f45fa0b4382da11d9835dba6aa61473b39cd0f764bc5033d53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46f3f3b765efab2b0790a727945d8708da4d1318e0741cba85d962a71a89469c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f3f3b765efab2b0790a727945d8708da4d1318e0741cba85d962a71a89469c->enter($__internal_46f3f3b765efab2b0790a727945d8708da4d1318e0741cba85d962a71a89469c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_a7189a300eb5f12c9259c49028996718404a5a0010bd52736d31553076f24689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7189a300eb5f12c9259c49028996718404a5a0010bd52736d31553076f24689->enter($__internal_a7189a300eb5f12c9259c49028996718404a5a0010bd52736d31553076f24689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46f3f3b765efab2b0790a727945d8708da4d1318e0741cba85d962a71a89469c->leave($__internal_46f3f3b765efab2b0790a727945d8708da4d1318e0741cba85d962a71a89469c_prof);

        
        $__internal_a7189a300eb5f12c9259c49028996718404a5a0010bd52736d31553076f24689->leave($__internal_a7189a300eb5f12c9259c49028996718404a5a0010bd52736d31553076f24689_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_183b255ad610b1ba033dc776247fba5c822f6fc0794b6d961bb3fb78a6c70958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183b255ad610b1ba033dc776247fba5c822f6fc0794b6d961bb3fb78a6c70958->enter($__internal_183b255ad610b1ba033dc776247fba5c822f6fc0794b6d961bb3fb78a6c70958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4222128310cf539cdf9cda9ebfd3229f220c2cde47481c3e28dadcadbfc14494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4222128310cf539cdf9cda9ebfd3229f220c2cde47481c3e28dadcadbfc14494->enter($__internal_4222128310cf539cdf9cda9ebfd3229f220c2cde47481c3e28dadcadbfc14494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_4222128310cf539cdf9cda9ebfd3229f220c2cde47481c3e28dadcadbfc14494->leave($__internal_4222128310cf539cdf9cda9ebfd3229f220c2cde47481c3e28dadcadbfc14494_prof);

        
        $__internal_183b255ad610b1ba033dc776247fba5c822f6fc0794b6d961bb3fb78a6c70958->leave($__internal_183b255ad610b1ba033dc776247fba5c822f6fc0794b6d961bb3fb78a6c70958_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
