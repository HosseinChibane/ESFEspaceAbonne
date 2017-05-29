<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_3f177243aad3212c75c98d83e3ee0f8abe5e71c8b8ac03d2e8164e906dbe4179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_408fb8c1ee8995505662c4e196af32f21a3f710588a6836c8965ef96eba29a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408fb8c1ee8995505662c4e196af32f21a3f710588a6836c8965ef96eba29a9f->enter($__internal_408fb8c1ee8995505662c4e196af32f21a3f710588a6836c8965ef96eba29a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_656ba2a9e9dca96217fa8e433a8606dc13a07792f00c390027dcb98155b44bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656ba2a9e9dca96217fa8e433a8606dc13a07792f00c390027dcb98155b44bc4->enter($__internal_656ba2a9e9dca96217fa8e433a8606dc13a07792f00c390027dcb98155b44bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_408fb8c1ee8995505662c4e196af32f21a3f710588a6836c8965ef96eba29a9f->leave($__internal_408fb8c1ee8995505662c4e196af32f21a3f710588a6836c8965ef96eba29a9f_prof);

        
        $__internal_656ba2a9e9dca96217fa8e433a8606dc13a07792f00c390027dcb98155b44bc4->leave($__internal_656ba2a9e9dca96217fa8e433a8606dc13a07792f00c390027dcb98155b44bc4_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_144d422fad27e9f9f2a98b5ec3b01138e5a92668bf96d7fb8c34f4153813adeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144d422fad27e9f9f2a98b5ec3b01138e5a92668bf96d7fb8c34f4153813adeb->enter($__internal_144d422fad27e9f9f2a98b5ec3b01138e5a92668bf96d7fb8c34f4153813adeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_c1b1ee203955657f8a823efe67bc7d39a06a4d452dbb569a5a940a466429c30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b1ee203955657f8a823efe67bc7d39a06a4d452dbb569a5a940a466429c30c->enter($__internal_c1b1ee203955657f8a823efe67bc7d39a06a4d452dbb569a5a940a466429c30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c1b1ee203955657f8a823efe67bc7d39a06a4d452dbb569a5a940a466429c30c->leave($__internal_c1b1ee203955657f8a823efe67bc7d39a06a4d452dbb569a5a940a466429c30c_prof);

        
        $__internal_144d422fad27e9f9f2a98b5ec3b01138e5a92668bf96d7fb8c34f4153813adeb->leave($__internal_144d422fad27e9f9f2a98b5ec3b01138e5a92668bf96d7fb8c34f4153813adeb_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_c46c8cade75ac983ebe23b641ddd533be4998773532c10e7c9f2cf56ff3b2291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46c8cade75ac983ebe23b641ddd533be4998773532c10e7c9f2cf56ff3b2291->enter($__internal_c46c8cade75ac983ebe23b641ddd533be4998773532c10e7c9f2cf56ff3b2291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_bf473f5045eec298fbeb27d1efa50e5beaac1940ea2f1d054f4cd87ee2f704bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf473f5045eec298fbeb27d1efa50e5beaac1940ea2f1d054f4cd87ee2f704bd->enter($__internal_bf473f5045eec298fbeb27d1efa50e5beaac1940ea2f1d054f4cd87ee2f704bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bf473f5045eec298fbeb27d1efa50e5beaac1940ea2f1d054f4cd87ee2f704bd->leave($__internal_bf473f5045eec298fbeb27d1efa50e5beaac1940ea2f1d054f4cd87ee2f704bd_prof);

        
        $__internal_c46c8cade75ac983ebe23b641ddd533be4998773532c10e7c9f2cf56ff3b2291->leave($__internal_c46c8cade75ac983ebe23b641ddd533be4998773532c10e7c9f2cf56ff3b2291_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_2f787d6510272a675afabf4b1aef35575a2ea6eaacae769e51fb884ea3aef83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f787d6510272a675afabf4b1aef35575a2ea6eaacae769e51fb884ea3aef83e->enter($__internal_2f787d6510272a675afabf4b1aef35575a2ea6eaacae769e51fb884ea3aef83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_42b7de59455fc645b822f6d3c582da0e57e2c617bfff0489ce55e4c499775d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b7de59455fc645b822f6d3c582da0e57e2c617bfff0489ce55e4c499775d20->enter($__internal_42b7de59455fc645b822f6d3c582da0e57e2c617bfff0489ce55e4c499775d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_42b7de59455fc645b822f6d3c582da0e57e2c617bfff0489ce55e4c499775d20->leave($__internal_42b7de59455fc645b822f6d3c582da0e57e2c617bfff0489ce55e4c499775d20_prof);

        
        $__internal_2f787d6510272a675afabf4b1aef35575a2ea6eaacae769e51fb884ea3aef83e->leave($__internal_2f787d6510272a675afabf4b1aef35575a2ea6eaacae769e51fb884ea3aef83e_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_e6551802a3f95c64499bee632cd5759b6e18aab63bbb5c4b290fb87311a292ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6551802a3f95c64499bee632cd5759b6e18aab63bbb5c4b290fb87311a292ef->enter($__internal_e6551802a3f95c64499bee632cd5759b6e18aab63bbb5c4b290fb87311a292ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_124ce4680776cf49252471a3c1512557850ff9aa4296fb8b80e2188e842e0e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124ce4680776cf49252471a3c1512557850ff9aa4296fb8b80e2188e842e0e1a->enter($__internal_124ce4680776cf49252471a3c1512557850ff9aa4296fb8b80e2188e842e0e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_124ce4680776cf49252471a3c1512557850ff9aa4296fb8b80e2188e842e0e1a->leave($__internal_124ce4680776cf49252471a3c1512557850ff9aa4296fb8b80e2188e842e0e1a_prof);

        
        $__internal_e6551802a3f95c64499bee632cd5759b6e18aab63bbb5c4b290fb87311a292ef->leave($__internal_e6551802a3f95c64499bee632cd5759b6e18aab63bbb5c4b290fb87311a292ef_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\vich\\uploader-bundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
