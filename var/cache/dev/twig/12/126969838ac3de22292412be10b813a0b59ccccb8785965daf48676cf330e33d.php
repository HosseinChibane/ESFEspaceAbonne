<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fbff8bb767668e417b21f8d50b7146687149b5f67c0bf26d39560895c52df962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_42e67a047e7b8f5a93f1e7e33d0f87884cc18acf4542f645ab0a67ea1c9effea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e67a047e7b8f5a93f1e7e33d0f87884cc18acf4542f645ab0a67ea1c9effea->enter($__internal_42e67a047e7b8f5a93f1e7e33d0f87884cc18acf4542f645ab0a67ea1c9effea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_47793c76057786502952549a818e412ad322ec96109a61a75a942b05d2ab16b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47793c76057786502952549a818e412ad322ec96109a61a75a942b05d2ab16b4->enter($__internal_47793c76057786502952549a818e412ad322ec96109a61a75a942b05d2ab16b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42e67a047e7b8f5a93f1e7e33d0f87884cc18acf4542f645ab0a67ea1c9effea->leave($__internal_42e67a047e7b8f5a93f1e7e33d0f87884cc18acf4542f645ab0a67ea1c9effea_prof);

        
        $__internal_47793c76057786502952549a818e412ad322ec96109a61a75a942b05d2ab16b4->leave($__internal_47793c76057786502952549a818e412ad322ec96109a61a75a942b05d2ab16b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc53e6b3903f3cdbb32fe8b6a4e4cdad78b81a1f7d7decab794d0c8781cac346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc53e6b3903f3cdbb32fe8b6a4e4cdad78b81a1f7d7decab794d0c8781cac346->enter($__internal_bc53e6b3903f3cdbb32fe8b6a4e4cdad78b81a1f7d7decab794d0c8781cac346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0f013e0336bba9832c393c242e51788752a9eb130a82b3ac206b7dbc4b4eca07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f013e0336bba9832c393c242e51788752a9eb130a82b3ac206b7dbc4b4eca07->enter($__internal_0f013e0336bba9832c393c242e51788752a9eb130a82b3ac206b7dbc4b4eca07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0f013e0336bba9832c393c242e51788752a9eb130a82b3ac206b7dbc4b4eca07->leave($__internal_0f013e0336bba9832c393c242e51788752a9eb130a82b3ac206b7dbc4b4eca07_prof);

        
        $__internal_bc53e6b3903f3cdbb32fe8b6a4e4cdad78b81a1f7d7decab794d0c8781cac346->leave($__internal_bc53e6b3903f3cdbb32fe8b6a4e4cdad78b81a1f7d7decab794d0c8781cac346_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
