<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_325a0164ab02f80d8652bbe2882bbe151121b7924e61f123a406c1ebe04238c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_887a22b07ec618251b31d792e7c2df5cb8e156ec172b591def15860dbc454c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887a22b07ec618251b31d792e7c2df5cb8e156ec172b591def15860dbc454c5b->enter($__internal_887a22b07ec618251b31d792e7c2df5cb8e156ec172b591def15860dbc454c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_370580b9d844f8b21991c7d21d82b201a307be8944c73b6d4824891ca6a28632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370580b9d844f8b21991c7d21d82b201a307be8944c73b6d4824891ca6a28632->enter($__internal_370580b9d844f8b21991c7d21d82b201a307be8944c73b6d4824891ca6a28632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_887a22b07ec618251b31d792e7c2df5cb8e156ec172b591def15860dbc454c5b->leave($__internal_887a22b07ec618251b31d792e7c2df5cb8e156ec172b591def15860dbc454c5b_prof);

        
        $__internal_370580b9d844f8b21991c7d21d82b201a307be8944c73b6d4824891ca6a28632->leave($__internal_370580b9d844f8b21991c7d21d82b201a307be8944c73b6d4824891ca6a28632_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d36bf4e52b7c997bea6000e486c6cdc3af5cc3621e76dd6274b4ee7d644cc9e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36bf4e52b7c997bea6000e486c6cdc3af5cc3621e76dd6274b4ee7d644cc9e6->enter($__internal_d36bf4e52b7c997bea6000e486c6cdc3af5cc3621e76dd6274b4ee7d644cc9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62ba439c347550e9e14aa334f8b63eacdcabae103d5c6e3b95be445a54086773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ba439c347550e9e14aa334f8b63eacdcabae103d5c6e3b95be445a54086773->enter($__internal_62ba439c347550e9e14aa334f8b63eacdcabae103d5c6e3b95be445a54086773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_62ba439c347550e9e14aa334f8b63eacdcabae103d5c6e3b95be445a54086773->leave($__internal_62ba439c347550e9e14aa334f8b63eacdcabae103d5c6e3b95be445a54086773_prof);

        
        $__internal_d36bf4e52b7c997bea6000e486c6cdc3af5cc3621e76dd6274b4ee7d644cc9e6->leave($__internal_d36bf4e52b7c997bea6000e486c6cdc3af5cc3621e76dd6274b4ee7d644cc9e6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
