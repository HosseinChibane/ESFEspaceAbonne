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
        $__internal_b084dcc721042425e690035e23b36454e8b10f5161df7106ff6432d0511c983e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b084dcc721042425e690035e23b36454e8b10f5161df7106ff6432d0511c983e->enter($__internal_b084dcc721042425e690035e23b36454e8b10f5161df7106ff6432d0511c983e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_6034b12a4ee561412aff4730ad2d10f07a7075ab32d793e87d918cf0c2dd010c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6034b12a4ee561412aff4730ad2d10f07a7075ab32d793e87d918cf0c2dd010c->enter($__internal_6034b12a4ee561412aff4730ad2d10f07a7075ab32d793e87d918cf0c2dd010c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b084dcc721042425e690035e23b36454e8b10f5161df7106ff6432d0511c983e->leave($__internal_b084dcc721042425e690035e23b36454e8b10f5161df7106ff6432d0511c983e_prof);

        
        $__internal_6034b12a4ee561412aff4730ad2d10f07a7075ab32d793e87d918cf0c2dd010c->leave($__internal_6034b12a4ee561412aff4730ad2d10f07a7075ab32d793e87d918cf0c2dd010c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac459d6c918232b1cef7e9395f787c8ddcf76de5672bfc9d26f1e62baf2fa4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac459d6c918232b1cef7e9395f787c8ddcf76de5672bfc9d26f1e62baf2fa4d7->enter($__internal_ac459d6c918232b1cef7e9395f787c8ddcf76de5672bfc9d26f1e62baf2fa4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_399ceb3569442cc86de7fb2c8b90d34129ec2c62e58f061eb1baaed34867c46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399ceb3569442cc86de7fb2c8b90d34129ec2c62e58f061eb1baaed34867c46a->enter($__internal_399ceb3569442cc86de7fb2c8b90d34129ec2c62e58f061eb1baaed34867c46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_399ceb3569442cc86de7fb2c8b90d34129ec2c62e58f061eb1baaed34867c46a->leave($__internal_399ceb3569442cc86de7fb2c8b90d34129ec2c62e58f061eb1baaed34867c46a_prof);

        
        $__internal_ac459d6c918232b1cef7e9395f787c8ddcf76de5672bfc9d26f1e62baf2fa4d7->leave($__internal_ac459d6c918232b1cef7e9395f787c8ddcf76de5672bfc9d26f1e62baf2fa4d7_prof);

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
