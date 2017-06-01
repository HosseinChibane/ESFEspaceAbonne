<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_1b2be407181ca8d4f01e79d1329d431d76524db4432130e90d38608a60a0b484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_5682d4bf8ff451d85426d46bd7138f58104d1db599f6bf2ea63e6da83b126cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5682d4bf8ff451d85426d46bd7138f58104d1db599f6bf2ea63e6da83b126cbf->enter($__internal_5682d4bf8ff451d85426d46bd7138f58104d1db599f6bf2ea63e6da83b126cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_33c0197b592d1b6fa22cdfd04ac6c126ba722fd70d1e6b2220b641ffc1300675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c0197b592d1b6fa22cdfd04ac6c126ba722fd70d1e6b2220b641ffc1300675->enter($__internal_33c0197b592d1b6fa22cdfd04ac6c126ba722fd70d1e6b2220b641ffc1300675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5682d4bf8ff451d85426d46bd7138f58104d1db599f6bf2ea63e6da83b126cbf->leave($__internal_5682d4bf8ff451d85426d46bd7138f58104d1db599f6bf2ea63e6da83b126cbf_prof);

        
        $__internal_33c0197b592d1b6fa22cdfd04ac6c126ba722fd70d1e6b2220b641ffc1300675->leave($__internal_33c0197b592d1b6fa22cdfd04ac6c126ba722fd70d1e6b2220b641ffc1300675_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb1a312a06f7544cc94d74ce70b1c46d242e9117a374c55b2967a4c23473d1d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1a312a06f7544cc94d74ce70b1c46d242e9117a374c55b2967a4c23473d1d2->enter($__internal_bb1a312a06f7544cc94d74ce70b1c46d242e9117a374c55b2967a4c23473d1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b9c1484a802e466c52808b9d0e411c0963db27be755aaecc1b6a84b1c933d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9c1484a802e466c52808b9d0e411c0963db27be755aaecc1b6a84b1c933d25->enter($__internal_4b9c1484a802e466c52808b9d0e411c0963db27be755aaecc1b6a84b1c933d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4b9c1484a802e466c52808b9d0e411c0963db27be755aaecc1b6a84b1c933d25->leave($__internal_4b9c1484a802e466c52808b9d0e411c0963db27be755aaecc1b6a84b1c933d25_prof);

        
        $__internal_bb1a312a06f7544cc94d74ce70b1c46d242e9117a374c55b2967a4c23473d1d2->leave($__internal_bb1a312a06f7544cc94d74ce70b1c46d242e9117a374c55b2967a4c23473d1d2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
