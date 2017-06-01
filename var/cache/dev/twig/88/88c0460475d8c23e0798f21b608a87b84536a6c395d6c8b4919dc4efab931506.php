<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7a4d2980264112ed615220037fa78fed1dbbffcc2bb5857bc4c865761cf449ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_fdb6c38daeeb92b688bda9cb7893adea0ee79b5021f252b8ed263c8b6bb0d6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb6c38daeeb92b688bda9cb7893adea0ee79b5021f252b8ed263c8b6bb0d6e6->enter($__internal_fdb6c38daeeb92b688bda9cb7893adea0ee79b5021f252b8ed263c8b6bb0d6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_b14991521b9ab30ddfc32287d530bd3c5ea11e592323d2c93cdf557354e226b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14991521b9ab30ddfc32287d530bd3c5ea11e592323d2c93cdf557354e226b6->enter($__internal_b14991521b9ab30ddfc32287d530bd3c5ea11e592323d2c93cdf557354e226b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdb6c38daeeb92b688bda9cb7893adea0ee79b5021f252b8ed263c8b6bb0d6e6->leave($__internal_fdb6c38daeeb92b688bda9cb7893adea0ee79b5021f252b8ed263c8b6bb0d6e6_prof);

        
        $__internal_b14991521b9ab30ddfc32287d530bd3c5ea11e592323d2c93cdf557354e226b6->leave($__internal_b14991521b9ab30ddfc32287d530bd3c5ea11e592323d2c93cdf557354e226b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c943d9fbe0eef666fb89f5433fd25124c104b4b8096927c45c156f3466e8aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c943d9fbe0eef666fb89f5433fd25124c104b4b8096927c45c156f3466e8aeb->enter($__internal_7c943d9fbe0eef666fb89f5433fd25124c104b4b8096927c45c156f3466e8aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b6306dcb88aee61c2b605d6e845c1ac6903a15ed0aa4903e70f50cfbf315aec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6306dcb88aee61c2b605d6e845c1ac6903a15ed0aa4903e70f50cfbf315aec3->enter($__internal_b6306dcb88aee61c2b605d6e845c1ac6903a15ed0aa4903e70f50cfbf315aec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b6306dcb88aee61c2b605d6e845c1ac6903a15ed0aa4903e70f50cfbf315aec3->leave($__internal_b6306dcb88aee61c2b605d6e845c1ac6903a15ed0aa4903e70f50cfbf315aec3_prof);

        
        $__internal_7c943d9fbe0eef666fb89f5433fd25124c104b4b8096927c45c156f3466e8aeb->leave($__internal_7c943d9fbe0eef666fb89f5433fd25124c104b4b8096927c45c156f3466e8aeb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
