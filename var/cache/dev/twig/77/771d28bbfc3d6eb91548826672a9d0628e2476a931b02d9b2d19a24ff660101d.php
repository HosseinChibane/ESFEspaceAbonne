<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4e45ec3581ae4645c1a35829c95ac9490ff4d77734490c2ba094e9e590d4f358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a201c615d461f3d852af8a67dd407a0e77cf05c7b74584b170aa6a868dad58f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a201c615d461f3d852af8a67dd407a0e77cf05c7b74584b170aa6a868dad58f5->enter($__internal_a201c615d461f3d852af8a67dd407a0e77cf05c7b74584b170aa6a868dad58f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_70ecfe9f3dc69f0b2104cceea07752bcaa28b2efc72c0e90808c4a6241392e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ecfe9f3dc69f0b2104cceea07752bcaa28b2efc72c0e90808c4a6241392e0c->enter($__internal_70ecfe9f3dc69f0b2104cceea07752bcaa28b2efc72c0e90808c4a6241392e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a201c615d461f3d852af8a67dd407a0e77cf05c7b74584b170aa6a868dad58f5->leave($__internal_a201c615d461f3d852af8a67dd407a0e77cf05c7b74584b170aa6a868dad58f5_prof);

        
        $__internal_70ecfe9f3dc69f0b2104cceea07752bcaa28b2efc72c0e90808c4a6241392e0c->leave($__internal_70ecfe9f3dc69f0b2104cceea07752bcaa28b2efc72c0e90808c4a6241392e0c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bff5a3b37630eb3136bf6bae84693dac160d436fa797bc9baf6aa0bde5d653c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bff5a3b37630eb3136bf6bae84693dac160d436fa797bc9baf6aa0bde5d653c->enter($__internal_4bff5a3b37630eb3136bf6bae84693dac160d436fa797bc9baf6aa0bde5d653c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4f0ba70421659c83b4185d61cf803f55e57928f6d62e0e931d45ff2cfdc8d884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0ba70421659c83b4185d61cf803f55e57928f6d62e0e931d45ff2cfdc8d884->enter($__internal_4f0ba70421659c83b4185d61cf803f55e57928f6d62e0e931d45ff2cfdc8d884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_4f0ba70421659c83b4185d61cf803f55e57928f6d62e0e931d45ff2cfdc8d884->leave($__internal_4f0ba70421659c83b4185d61cf803f55e57928f6d62e0e931d45ff2cfdc8d884_prof);

        
        $__internal_4bff5a3b37630eb3136bf6bae84693dac160d436fa797bc9baf6aa0bde5d653c->leave($__internal_4bff5a3b37630eb3136bf6bae84693dac160d436fa797bc9baf6aa0bde5d653c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
