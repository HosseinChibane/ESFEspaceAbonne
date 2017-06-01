<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_5032647d2c31f7992ddca5ac6219669afde5f522b034283d385ee86f67e04047 extends Twig_Template
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
        $__internal_48611512c1adc50ce90655e9abf789b741c5fe0428339d3d939c198d0c94e4b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48611512c1adc50ce90655e9abf789b741c5fe0428339d3d939c198d0c94e4b1->enter($__internal_48611512c1adc50ce90655e9abf789b741c5fe0428339d3d939c198d0c94e4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_7362c591ed3961376d1264386cb23a7c1b5656122fa1be0f47ea7d37589f0757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7362c591ed3961376d1264386cb23a7c1b5656122fa1be0f47ea7d37589f0757->enter($__internal_7362c591ed3961376d1264386cb23a7c1b5656122fa1be0f47ea7d37589f0757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_48611512c1adc50ce90655e9abf789b741c5fe0428339d3d939c198d0c94e4b1->leave($__internal_48611512c1adc50ce90655e9abf789b741c5fe0428339d3d939c198d0c94e4b1_prof);

        
        $__internal_7362c591ed3961376d1264386cb23a7c1b5656122fa1be0f47ea7d37589f0757->leave($__internal_7362c591ed3961376d1264386cb23a7c1b5656122fa1be0f47ea7d37589f0757_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_abfa9f38bc26d819bb8beb18bae4b684c7b4541bf178912f5515d210d297dc98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abfa9f38bc26d819bb8beb18bae4b684c7b4541bf178912f5515d210d297dc98->enter($__internal_abfa9f38bc26d819bb8beb18bae4b684c7b4541bf178912f5515d210d297dc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_81e921271cbe766e176ba04b163c65115811de87bc3bee886366df53e7e894d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e921271cbe766e176ba04b163c65115811de87bc3bee886366df53e7e894d6->enter($__internal_81e921271cbe766e176ba04b163c65115811de87bc3bee886366df53e7e894d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_81e921271cbe766e176ba04b163c65115811de87bc3bee886366df53e7e894d6->leave($__internal_81e921271cbe766e176ba04b163c65115811de87bc3bee886366df53e7e894d6_prof);

        
        $__internal_abfa9f38bc26d819bb8beb18bae4b684c7b4541bf178912f5515d210d297dc98->leave($__internal_abfa9f38bc26d819bb8beb18bae4b684c7b4541bf178912f5515d210d297dc98_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_fe9d53749170604cd2a6b42cd89ed3c728a4cced2cd629455eef40571958a713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9d53749170604cd2a6b42cd89ed3c728a4cced2cd629455eef40571958a713->enter($__internal_fe9d53749170604cd2a6b42cd89ed3c728a4cced2cd629455eef40571958a713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_f7d7252f64dbf9ead81542e7590e4b10c8819066521313067c1c7724525a93df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d7252f64dbf9ead81542e7590e4b10c8819066521313067c1c7724525a93df->enter($__internal_f7d7252f64dbf9ead81542e7590e4b10c8819066521313067c1c7724525a93df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_f7d7252f64dbf9ead81542e7590e4b10c8819066521313067c1c7724525a93df->leave($__internal_f7d7252f64dbf9ead81542e7590e4b10c8819066521313067c1c7724525a93df_prof);

        
        $__internal_fe9d53749170604cd2a6b42cd89ed3c728a4cced2cd629455eef40571958a713->leave($__internal_fe9d53749170604cd2a6b42cd89ed3c728a4cced2cd629455eef40571958a713_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_40a34131bb3a6fc102f5cdcf6843ec9b8951695d9e8bb942eda703b83092989e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a34131bb3a6fc102f5cdcf6843ec9b8951695d9e8bb942eda703b83092989e->enter($__internal_40a34131bb3a6fc102f5cdcf6843ec9b8951695d9e8bb942eda703b83092989e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_95b6c0b9d9085d50dd8d48ed7b9df43d946d9161aa783944c3b33027786edbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b6c0b9d9085d50dd8d48ed7b9df43d946d9161aa783944c3b33027786edbd7->enter($__internal_95b6c0b9d9085d50dd8d48ed7b9df43d946d9161aa783944c3b33027786edbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_95b6c0b9d9085d50dd8d48ed7b9df43d946d9161aa783944c3b33027786edbd7->leave($__internal_95b6c0b9d9085d50dd8d48ed7b9df43d946d9161aa783944c3b33027786edbd7_prof);

        
        $__internal_40a34131bb3a6fc102f5cdcf6843ec9b8951695d9e8bb942eda703b83092989e->leave($__internal_40a34131bb3a6fc102f5cdcf6843ec9b8951695d9e8bb942eda703b83092989e_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_b55724714677dae5c783b8838c2905a5b7bc18d0e1a7130a80d73b196f84eb75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55724714677dae5c783b8838c2905a5b7bc18d0e1a7130a80d73b196f84eb75->enter($__internal_b55724714677dae5c783b8838c2905a5b7bc18d0e1a7130a80d73b196f84eb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_3c0815b04a8f77595d1a5f4c865a4553a28566fa677461c6f95348c75a7ea0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0815b04a8f77595d1a5f4c865a4553a28566fa677461c6f95348c75a7ea0f5->enter($__internal_3c0815b04a8f77595d1a5f4c865a4553a28566fa677461c6f95348c75a7ea0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_3c0815b04a8f77595d1a5f4c865a4553a28566fa677461c6f95348c75a7ea0f5->leave($__internal_3c0815b04a8f77595d1a5f4c865a4553a28566fa677461c6f95348c75a7ea0f5_prof);

        
        $__internal_b55724714677dae5c783b8838c2905a5b7bc18d0e1a7130a80d73b196f84eb75->leave($__internal_b55724714677dae5c783b8838c2905a5b7bc18d0e1a7130a80d73b196f84eb75_prof);

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
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\vich\\uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
