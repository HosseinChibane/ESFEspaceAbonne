<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_53836646d5f19fb062d069c8fbc19fa6518a47c2966ef82d1615f8d410c85081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_42c545514d6aea5bbd9ae62b9f390e4d7a7d512d37452500761c19bfaaf108c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c545514d6aea5bbd9ae62b9f390e4d7a7d512d37452500761c19bfaaf108c3->enter($__internal_42c545514d6aea5bbd9ae62b9f390e4d7a7d512d37452500761c19bfaaf108c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_193a0a9d85127d56185f682cb0f7769b35c46ddf994a8923f15ce3d939fa6d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193a0a9d85127d56185f682cb0f7769b35c46ddf994a8923f15ce3d939fa6d9b->enter($__internal_193a0a9d85127d56185f682cb0f7769b35c46ddf994a8923f15ce3d939fa6d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42c545514d6aea5bbd9ae62b9f390e4d7a7d512d37452500761c19bfaaf108c3->leave($__internal_42c545514d6aea5bbd9ae62b9f390e4d7a7d512d37452500761c19bfaaf108c3_prof);

        
        $__internal_193a0a9d85127d56185f682cb0f7769b35c46ddf994a8923f15ce3d939fa6d9b->leave($__internal_193a0a9d85127d56185f682cb0f7769b35c46ddf994a8923f15ce3d939fa6d9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e995a113e17f60e4e5dae27543b293be2eed0977177b6e2c91d952fd294356d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e995a113e17f60e4e5dae27543b293be2eed0977177b6e2c91d952fd294356d8->enter($__internal_e995a113e17f60e4e5dae27543b293be2eed0977177b6e2c91d952fd294356d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b09f0d938566e7fccc105dfefa561a32a14b87c12da2f14aa2694e7c60c51e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09f0d938566e7fccc105dfefa561a32a14b87c12da2f14aa2694e7c60c51e84->enter($__internal_b09f0d938566e7fccc105dfefa561a32a14b87c12da2f14aa2694e7c60c51e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_b09f0d938566e7fccc105dfefa561a32a14b87c12da2f14aa2694e7c60c51e84->leave($__internal_b09f0d938566e7fccc105dfefa561a32a14b87c12da2f14aa2694e7c60c51e84_prof);

        
        $__internal_e995a113e17f60e4e5dae27543b293be2eed0977177b6e2c91d952fd294356d8->leave($__internal_e995a113e17f60e4e5dae27543b293be2eed0977177b6e2c91d952fd294356d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
