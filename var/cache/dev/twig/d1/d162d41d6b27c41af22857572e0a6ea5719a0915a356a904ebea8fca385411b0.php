<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6af58d5e8928c0d2ad6c4fe42742140e92fbbf66f530df390e1204c0564e2012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_b6996d4b21ca66a62e28f8989ca19f8aef5c2ce11306a4c0f9995f30bfe0b094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6996d4b21ca66a62e28f8989ca19f8aef5c2ce11306a4c0f9995f30bfe0b094->enter($__internal_b6996d4b21ca66a62e28f8989ca19f8aef5c2ce11306a4c0f9995f30bfe0b094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_4fee643aa9191bd36f61721bada05548e09d47aa81fe87d9185bbca3db4f2b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fee643aa9191bd36f61721bada05548e09d47aa81fe87d9185bbca3db4f2b4b->enter($__internal_4fee643aa9191bd36f61721bada05548e09d47aa81fe87d9185bbca3db4f2b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6996d4b21ca66a62e28f8989ca19f8aef5c2ce11306a4c0f9995f30bfe0b094->leave($__internal_b6996d4b21ca66a62e28f8989ca19f8aef5c2ce11306a4c0f9995f30bfe0b094_prof);

        
        $__internal_4fee643aa9191bd36f61721bada05548e09d47aa81fe87d9185bbca3db4f2b4b->leave($__internal_4fee643aa9191bd36f61721bada05548e09d47aa81fe87d9185bbca3db4f2b4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_033573a5fa5d806492a589e59ec46a398c278ae342a6b790a6d0f100c692161d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033573a5fa5d806492a589e59ec46a398c278ae342a6b790a6d0f100c692161d->enter($__internal_033573a5fa5d806492a589e59ec46a398c278ae342a6b790a6d0f100c692161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1859d88f534e6b6003e313283f7936b10238f4d99838351be394a0473f90e394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1859d88f534e6b6003e313283f7936b10238f4d99838351be394a0473f90e394->enter($__internal_1859d88f534e6b6003e313283f7936b10238f4d99838351be394a0473f90e394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_1859d88f534e6b6003e313283f7936b10238f4d99838351be394a0473f90e394->leave($__internal_1859d88f534e6b6003e313283f7936b10238f4d99838351be394a0473f90e394_prof);

        
        $__internal_033573a5fa5d806492a589e59ec46a398c278ae342a6b790a6d0f100c692161d->leave($__internal_033573a5fa5d806492a589e59ec46a398c278ae342a6b790a6d0f100c692161d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
