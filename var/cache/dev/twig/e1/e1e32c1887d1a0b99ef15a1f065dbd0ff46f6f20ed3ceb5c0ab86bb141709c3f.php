<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_90c49275edec44d7afb7542822f37a0b1991ff6dc1f5f78af1682179ef76dba9 extends Twig_Template
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
        $__internal_8204332c28f137a5f988a62b060d3e142d85fd30fa8fc1bce57c99b92c11abda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8204332c28f137a5f988a62b060d3e142d85fd30fa8fc1bce57c99b92c11abda->enter($__internal_8204332c28f137a5f988a62b060d3e142d85fd30fa8fc1bce57c99b92c11abda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_cf57eef204d2994a2b2a2fa1c26796547cf9f6529e24d0f5d2f3b0f7b2de694e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf57eef204d2994a2b2a2fa1c26796547cf9f6529e24d0f5d2f3b0f7b2de694e->enter($__internal_cf57eef204d2994a2b2a2fa1c26796547cf9f6529e24d0f5d2f3b0f7b2de694e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8204332c28f137a5f988a62b060d3e142d85fd30fa8fc1bce57c99b92c11abda->leave($__internal_8204332c28f137a5f988a62b060d3e142d85fd30fa8fc1bce57c99b92c11abda_prof);

        
        $__internal_cf57eef204d2994a2b2a2fa1c26796547cf9f6529e24d0f5d2f3b0f7b2de694e->leave($__internal_cf57eef204d2994a2b2a2fa1c26796547cf9f6529e24d0f5d2f3b0f7b2de694e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57f6d354705d72f87c8fe33ce3858c50a30f013479907e71d16ebbc3087226ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f6d354705d72f87c8fe33ce3858c50a30f013479907e71d16ebbc3087226ce->enter($__internal_57f6d354705d72f87c8fe33ce3858c50a30f013479907e71d16ebbc3087226ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_126858ff3ddea922f02d47936126b1bc95add972b27433d4b4ce4927bab063d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126858ff3ddea922f02d47936126b1bc95add972b27433d4b4ce4927bab063d8->enter($__internal_126858ff3ddea922f02d47936126b1bc95add972b27433d4b4ce4927bab063d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_126858ff3ddea922f02d47936126b1bc95add972b27433d4b4ce4927bab063d8->leave($__internal_126858ff3ddea922f02d47936126b1bc95add972b27433d4b4ce4927bab063d8_prof);

        
        $__internal_57f6d354705d72f87c8fe33ce3858c50a30f013479907e71d16ebbc3087226ce->leave($__internal_57f6d354705d72f87c8fe33ce3858c50a30f013479907e71d16ebbc3087226ce_prof);

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
